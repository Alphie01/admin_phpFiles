/*
Template Name:Admin Panel
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: schedules (calendar) Js File
*/

"use strict";

/*eslint-disable*/

var ScheduleList = [];

var SCHEDULE_CATEGORY = ["milestone", "task"];

function ScheduleInfo() {
  this.id = null;
  this.calendarId = null;

  this.title = null;
  this.body = null;
  this.isAllday = false;
  this.start = null;
  this.end = null;
  this.category = "";
  this.dueDateClass = "";

  this.color = null;
  this.bgColor = null;
  this.dragBgColor = null;
  this.borderColor = null;
  this.customStyle = "";

  this.isFocused = false;
  this.isPending = false;
  this.isVisible = true;
  this.isReadOnly = false;
  this.goingDuration = 0;
  this.comingDuration = 0;
  this.recurrenceRule = "";
  this.state = "";

  this.raw = {
    memo: "",
    hasToOrCc: false,
    hasRecurrenceRule: false,
    location: null,
    class: "public", // or 'private'
    creator: {
      name: "",
      avatar: "",
      company: "",
      email: "",
      phone: "",
    },
  };
}

function generateTime(schedule, renderStart, renderEnd) {
  var startDate = moment(renderStart.getTime());
  var endDate = moment(renderEnd.getTime());
  var diffDate = endDate.diff(startDate, "days");

  if (schedule.isAllday) {
    schedule.category = "allday";
  } else if (chance.bool({ likelihood: 30 })) {
    schedule.category = SCHEDULE_CATEGORY[chance.integer({ min: 0, max: 1 })];
    if (schedule.category === SCHEDULE_CATEGORY[1]) {
      schedule.dueDateClass = "morning";
    }
  } else {
    schedule.category = "time";
  }

  startDate.add(chance.integer({ min: 0, max: 0 }), "days");
  startDate.hours(chance.integer({ min: 0, max: 0 }));
  startDate.minutes(chance.bool() ? 0 : 0);
  schedule.start = startDate.toDate();

  endDate = moment(startDate);
  if (schedule.isAllday) {
    endDate.add(chance.integer({ min: 0, max: 0 }), "days");
  }

  schedule.end = endDate
    .add(chance.integer({ min: 0, max: 0 }), "hour")
    .toDate();

  if (!schedule.isAllday && chance.bool({ likelihood: 20 })) {
    schedule.goingDuration = chance.integer({ min: 0, max: 0 });
    schedule.comingDuration = chance.integer({ min: 0, max: 0 });
  }
}

function generateNames() {
  var names = [];
  var i = 0;
  var length = chance.integer({ min: 1, max: 10 });

  for (; i < length; i += 1) {
    names.push(chance.name());
  }

  return names;
}

function generateRandomSchedule(
  calendar,
  sqlId,
  calender_event_title,
  calender_event_body,
  calender_event_isAllday,
  calender_event_location,
  creator_name,
  creator_company,
  creator_email,
  creator_phone,
  isReadOnly,
  renderStart,
  renderEnd
) {
  var schedule = new ScheduleInfo();

  schedule.id = chance.guid();
  schedule.calendarId = calendar.id;

  schedule.title = calender_event_title;
  schedule.body = calender_event_body;
  schedule.isReadOnly = isReadOnly;
  schedule.end = renderEnd;
  schedule.start = renderStart;
  schedule.isAllday = calender_event_isAllday;
  schedule.category = "allday";
  /* console.log(renderStart);
  console.log(renderEnd);
  console.log('renderEnd');
  generateTime(schedule, renderStart, renderEnd); */

  schedule.isPrivate = false;
  schedule.location = calender_event_location;
  schedule.attendees = [];
  schedule.recurrenceRule = "";
  schedule.state = chance.bool({ likelihood: 20 }) ? "Free" : "Free";
  schedule.color = calendar.color;
  schedule.bgColor = calendar.bgColor;
  schedule.dragBgColor = calendar.dragBgColor;
  schedule.borderColor = calendar.borderColor;

  if (schedule.category === "milestone") {
    schedule.color = schedule.bgColor;
    schedule.bgColor = "transparent";
    schedule.dragBgColor = "transparent";
    schedule.borderColor = "transparent";
  }

  schedule.raw.memo = sqlId;
  schedule.raw.creator.name = creator_name;
  schedule.raw.creator.avatar = chance.avatar();
  schedule.raw.creator.company = creator_company;
  schedule.raw.creator.email = creator_email;
  schedule.raw.creator.phone = creator_phone;

  if (chance.bool({ likelihood: 20 })) {
    var travelTime = chance.minute();
    schedule.goingDuration = travelTime;
    schedule.comingDuration = travelTime;
  }

  ScheduleList.push(schedule);
}

var kull_yetki = document.getElementById("kull_yetki").value;

async function generateSchedule(viewName, renderStart, renderEnd) {
  ScheduleList = [];
  var bool = true;
  if (kull_yetki > 3) {
    bool = false;
  }
  var whole = [];
  await fetch("backends/calenderPicker.php")
    .then((response) => response.json())
    .then((data) => {
      data.forEach((element) => {
        console.log(element);
        generateRandomSchedule(
          CalendarList[element.event.calender_event_type],
          element.event.calender_event_id,
          element.event.calender_event_title,
          element.event.calender_event_body,
          element.event.calender_event_isAllday,
          element.event.calender_event_location,
          element.creator.kullanici_adsoyad,
          element.creator.kullanici_Institue,
          element.creator.kullanici_mail,
          element.creator.kullanici_gsm,
          bool,
          element.event.calender_event_start,
          element.event.calender_event_end
        );
      });
    });
}
