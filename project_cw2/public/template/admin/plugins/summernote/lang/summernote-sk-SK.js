/*!
 * 
<<<<<<< HEAD
<<<<<<< HEAD
 * Super simple wysiwyg editor v0.8.18
 * https://summernote.org
 * 
 * 
 * Copyright 2013- Alan Hong. and other contributors
 * summernote may be freely distributed under the MIT license.
 * 
 * Date: 2020-05-20T16:47Z
 * 
=======
=======
>>>>>>> danhmuc_list
 * Super simple WYSIWYG editor v0.8.20
 * https://summernote.org
 *
 *
 * Copyright 2013- Alan Hong and contributors
 * Summernote may be freely distributed under the MIT license.
 *
 * Date: 2021-10-14T21:15Z
 *
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
 */
(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
<<<<<<< HEAD
<<<<<<< HEAD
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 38);
/******/ })
/************************************************************************/
/******/ ({

/***/ 38:
/***/ (function(module, exports) {

=======
})(self, function() {
return /******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
>>>>>>> danhmuc_list
=======
})(self, function() {
return /******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
>>>>>>> danhmuc_list
(function ($) {
  $.extend($.summernote.lang, {
    'sk-SK': {
      font: {
        bold: 'Tučné',
        italic: 'Kurzíva',
        underline: 'Podčiarknutie',
        clear: 'Odstrániť štýl písma',
        height: 'Výška riadku',
<<<<<<< HEAD
<<<<<<< HEAD
=======
        name: 'Názov',
>>>>>>> danhmuc_list
=======
        name: 'Názov',
>>>>>>> danhmuc_list
        strikethrough: 'Prečiarknuté',
        subscript: 'Subscript',
        superscript: 'Superscript',
        size: 'Veľkosť písma'
      },
      image: {
        image: 'Obrázok',
        insert: 'Vložiť obrázok',
        resizeFull: 'Pôvodná veľkosť',
        resizeHalf: 'Polovičná veľkosť',
        resizeQuarter: 'Štvrtinová veľkosť',
        floatLeft: 'Umiestniť doľava',
        floatRight: 'Umiestniť doprava',
        floatNone: 'Bez zarovnania',
<<<<<<< HEAD
<<<<<<< HEAD
        shapeRounded: 'Shape: Rounded',
        shapeCircle: 'Shape: Circle',
        shapeThumbnail: 'Shape: Thumbnail',
        shapeNone: 'Shape: None',
        dragImageHere: 'Pretiahnuť sem obrázok',
        dropImage: 'Drop image or Text',
        selectFromFiles: 'Vybrať súbor',
        maximumFileSize: 'Maximum file size',
        maximumFileSizeError: 'Maximum file size exceeded.',
        url: 'URL obrázku',
        remove: 'Remove Image',
        original: 'Original'
=======
=======
>>>>>>> danhmuc_list
        shapeRounded: 'Tvar: Zaoblené',
        shapeCircle: 'Tvar: Kruh',
        shapeThumbnail: 'Tvar: Náhľad',
        shapeNone: 'Tvar: Žiadne',
        dragImageHere: 'Pretiahnuť sem obrázok',
        dropImage: 'Pretiahnuť sem obrázok alebo text',
        selectFromFiles: 'Vybrať súbor',
        maximumFileSize: 'Maximálna veľkosť súboru',
        maximumFileSizeError: 'Maximálna veľkosť súboru bola prekročená.',
        url: 'URL obrázku',
        removeMedia: 'Odstrániť obrázok',
        original: 'Originál'
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
      },
      video: {
        video: 'Video',
        videoLink: 'Odkaz videa',
        insert: 'Vložiť video',
        url: 'URL videa?',
        providers: '(YouTube, Vimeo, Vine, Instagram, DailyMotion alebo Youku)'
      },
      link: {
        link: 'Odkaz',
        insert: 'Vytvoriť odkaz',
        unlink: 'Zrušiť odkaz',
        edit: 'Upraviť',
        textToDisplay: 'Zobrazovaný text',
        url: 'Na akú URL adresu má tento odkaz viesť?',
<<<<<<< HEAD
<<<<<<< HEAD
        openInNewWindow: 'Otvoriť v novom okne'
      },
      table: {
        table: 'Tabuľka',
        addRowAbove: 'Add row above',
        addRowBelow: 'Add row below',
        addColLeft: 'Add column left',
        addColRight: 'Add column right',
        delRow: 'Delete row',
        delCol: 'Delete column',
        delTable: 'Delete table'
=======
=======
>>>>>>> danhmuc_list
        openInNewWindow: 'Otvoriť v novom okne',
        useProtocol: 'Použiť predvolený protokol'
      },
      table: {
        table: 'Tabuľka',
        addRowAbove: 'Pridať riadok nad',
        addRowBelow: 'Pridať riadok pod',
        addColLeft: 'Pridať stĺpec vľavo',
        addColRight: 'Pridať stĺpec vpravo',
        delRow: 'Odstrániť riadok',
        delCol: 'Odstrániť stĺpec',
        delTable: 'Odstrániť tabuľku'
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
      },
      hr: {
        insert: 'Vložit vodorovnú čiaru'
      },
      style: {
        style: 'Štýl',
        p: 'Normálny',
        blockquote: 'Citácia',
        pre: 'Kód',
        h1: 'Nadpis 1',
        h2: 'Nadpis 2',
        h3: 'Nadpis 3',
        h4: 'Nadpis 4',
        h5: 'Nadpis 5',
        h6: 'Nadpis 6'
      },
      lists: {
        unordered: 'Odrážkový zoznam',
        ordered: 'Číselný zoznam'
      },
      options: {
        help: 'Pomoc',
        fullscreen: 'Celá obrazovka',
        codeview: 'HTML kód'
      },
      paragraph: {
        paragraph: 'Odsek',
        outdent: 'Zväčšiť odsadenie',
        indent: 'Zmenšiť odsadenie',
        left: 'Zarovnať doľava',
        center: 'Zarovnať na stred',
        right: 'Zarovnať doprava',
        justify: 'Zarovnať obojstranne'
      },
      color: {
        recent: 'Aktuálna farba',
        more: 'Dalšie farby',
        background: 'Farba pozadia',
        foreground: 'Farba písma',
        transparent: 'Priehľadnosť',
        setTransparent: 'Nastaviť priehľadnosť',
        reset: 'Obnoviť',
        resetToDefault: 'Obnoviť prednastavené'
      },
      shortcut: {
        shortcuts: 'Klávesové skratky',
        close: 'Zavrieť',
        textFormatting: 'Formátovanie textu',
        action: 'Akcia',
        paragraphFormatting: 'Formátovanie odseku',
<<<<<<< HEAD
<<<<<<< HEAD
        documentStyle: 'Štýl dokumentu'
      },
      help: {
        'insertParagraph': 'Insert Paragraph',
        'undo': 'Undoes the last command',
        'redo': 'Redoes the last command',
        'tab': 'Tab',
        'untab': 'Untab',
        'bold': 'Set a bold style',
        'italic': 'Set a italic style',
        'underline': 'Set a underline style',
        'strikethrough': 'Set a strikethrough style',
        'removeFormat': 'Clean a style',
        'justifyLeft': 'Set left align',
        'justifyCenter': 'Set center align',
        'justifyRight': 'Set right align',
        'justifyFull': 'Set full align',
        'insertUnorderedList': 'Toggle unordered list',
        'insertOrderedList': 'Toggle ordered list',
        'outdent': 'Outdent on current paragraph',
        'indent': 'Indent on current paragraph',
=======
=======
>>>>>>> danhmuc_list
        documentStyle: 'Štýl dokumentu',
        extraKeys: 'Ďalšie kombinácie'
      },
      help: {
        'insertParagraph': 'Vložiť odsek',
        'undo': 'Vrátiť posledný krok',
        'redo': 'Obnoviť posledný krok',
        'tab': 'Odsadiť',
        'untab': 'Zmenšiť odsadenie',
        'bold': 'Tučné',
        'italic': 'Kurzívu',
        'underline': 'Podčiarknutie',
        'strikethrough': 'Preškrknutý text',
        'removeFormat': 'Odstrániť formátovanie',
        'justifyLeft': 'Odsadenie zľava',
        'justifyCenter': 'Vycentrovať',
        'justifyRight': 'Odsadenie zprava',
        'justifyFull': 'Zarovnať do bloku',
        'insertUnorderedList': 'Odrážkový zoznam',
        'insertOrderedList': 'Číselný zoznam',
        'outdent': 'Zrušiť odsadenie aktuálneho odseku',
        'indent': 'Odsadiť aktuálny odsek',
<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
        'formatPara': 'Change current block\'s format as a paragraph(P tag)',
        'formatH1': 'Change current block\'s format as H1',
        'formatH2': 'Change current block\'s format as H2',
        'formatH3': 'Change current block\'s format as H3',
        'formatH4': 'Change current block\'s format as H4',
        'formatH5': 'Change current block\'s format as H5',
        'formatH6': 'Change current block\'s format as H6',
<<<<<<< HEAD
<<<<<<< HEAD
        'insertHorizontalRule': 'Insert horizontal rule',
        'linkDialog.show': 'Show Link Dialog'
=======
        'insertHorizontalRule': 'Vložiť horizontálne pravidlo',
        'linkDialog.show': 'Dialóg na zadanie odkazu'
>>>>>>> danhmuc_list
=======
        'insertHorizontalRule': 'Vložiť horizontálne pravidlo',
        'linkDialog.show': 'Dialóg na zadanie odkazu'
>>>>>>> danhmuc_list
      },
      history: {
        undo: 'Krok vzad',
        redo: 'Krok dopredu'
      },
      specialChar: {
<<<<<<< HEAD
<<<<<<< HEAD
        specialChar: 'SPECIAL CHARACTERS',
        select: 'Select Special characters'
=======
        specialChar: 'ŠPECIÁLNE ZNAKY',
        select: 'Vybrať špeciálne znaky'
>>>>>>> danhmuc_list
=======
        specialChar: 'ŠPECIÁLNE ZNAKY',
        select: 'Vybrať špeciálne znaky'
>>>>>>> danhmuc_list
      }
    }
  });
})(jQuery);
<<<<<<< HEAD
<<<<<<< HEAD

/***/ })

/******/ });
});
=======
=======
>>>>>>> danhmuc_list
/******/ 	return __webpack_exports__;
/******/ })()
;
});
<<<<<<< HEAD
//# sourceMappingURL=summernote-sk-SK.js.map
>>>>>>> danhmuc_list
=======
//# sourceMappingURL=summernote-sk-SK.js.map
>>>>>>> danhmuc_list
