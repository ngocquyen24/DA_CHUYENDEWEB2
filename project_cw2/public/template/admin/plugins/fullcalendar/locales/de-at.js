FullCalendar.globalLocales.push(function () {
  'use strict';

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> danhmuc_list
  function affix(buttonText) {
    return (buttonText === 'Tag' || buttonText === 'Monat') ? 'r' :
      buttonText === 'Jahr' ? 's' : ''
  }

<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
  var deAt = {
    code: 'de-at',
    week: {
      dow: 1, // Monday is the first day of the week.
      doy: 4, // The week that contains Jan 4th is the first week of the year.
    },
    buttonText: {
      prev: 'Zurück',
      next: 'Vor',
      today: 'Heute',
      year: 'Jahr',
      month: 'Monat',
      week: 'Woche',
      day: 'Tag',
      list: 'Terminübersicht',
    },
    weekText: 'KW',
<<<<<<< HEAD
<<<<<<< HEAD
=======
    weekTextLong: 'Woche',
>>>>>>> danhmuc_list
=======
    weekTextLong: 'Woche',
>>>>>>> danhmuc_list
    allDayText: 'Ganztägig',
    moreLinkText: function(n) {
      return '+ weitere ' + n
    },
    noEventsText: 'Keine Ereignisse anzuzeigen',
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> danhmuc_list
    buttonHints: {
      prev(buttonText) {
        return `Vorherige${affix(buttonText)} ${buttonText}`
      },
      next(buttonText) {
        return `Nächste${affix(buttonText)} ${buttonText}`
      },
      today(buttonText) {
        // → Heute, Diese Woche, Dieser Monat, Dieses Jahr
        if (buttonText === 'Tag') {
          return 'Heute'
        }
        return `Diese${affix(buttonText)} ${buttonText}`
      },
    },
    viewHint(buttonText) {
      // → Tagesansicht, Wochenansicht, Monatsansicht, Jahresansicht
      const glue = buttonText === 'Woche' ? 'n' : buttonText === 'Monat' ? 's' : 'es';
      return buttonText + glue + 'ansicht'
    },
    navLinkHint: 'Gehe zu $0',
    moreLinkHint(eventCnt) {
      return 'Zeige ' + (eventCnt === 1 ?
        'ein weiteres Ereignis' :
        eventCnt + ' weitere Ereignisse')
    },
    closeHint: 'Schließen',
    timeHint: 'Uhrzeit',
    eventHint: 'Ereignis',
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
  };

  return deAt;

}());
