/**
 * @format
 */

/* eslint-env browser */
/* eslint prefer-arrow-callback: "off",  no-var: "off" */

// AMD define

(function amdLoader(global) {
  'use strict';
  var ENG_SCRIPTS_MODULE = 'eng-scripts';
  var loadedModules = {};
  var queuedModules = [];
  var fetchDependencyIfNeeded = function fetchDependencyIfNeeded(dependency) {
    var ref;
    var refs;
    var el;
    var script;
    var scripts = loadedModules[ENG_SCRIPTS_MODULE];
    if (
      scripts &&
      Object.prototype.hasOwnProperty.call(scripts, dependency) &&
      !scripts[dependency].fetched
    ) {
      script = scripts[dependency];
      script.fetched = true;
      el = document.createElement('script');
      el.setAttribute('type', 'text/javascript');
      el.setAttribute('async', '');
      el.setAttribute('src', script.url);
      refs = document.getElementsByTagName('head')[0].childNodes;
      ref = refs[refs.length - 1];
      // Using insertBefore instead of appendChild
      // see http://www.paulirish.com/2011/surefire-dom-element-insertion/
      ref.parentNode.insertBefore(el, ref.nextSibling);
    }
  };
  var inQueue = function inQueue(dependency) {
    var qm;
    for (var i = 0; i < queuedModules.length; i++) {
      qm = queuedModules[i];
      if (qm[0] === dependency) {
        return true;
      }
    }
    return false;
  };
  var dependenciesAreLoaded = function(dependencies) {
    var dependency;
    var allLoaded = true;
    for (var i = 0; i < dependencies.length; i++) {
      dependency = dependencies[i];
      if (!Object.prototype.hasOwnProperty.call(loadedModules, dependency)) {
        allLoaded = false;
        if (!inQueue(dependency)) {
          fetchDependencyIfNeeded(dependency);
        }
      }
    }
    return allLoaded;
  };
  var queueModule = function(id, dependencies, factory) {
    queuedModules.push([id, dependencies, factory]);
  };
  var loadModule = function(id, dependencies, factory) {
    var module = {};
    var exports;
    var tmp;

    dependencies = dependencies.map(function(dependency) {
      if (dependency === 'module') {
        return module;
      }
      if (dependency === 'exports') {
        module.exports = {};
        return module.exports;
      }
      return loadedModules[dependency];
    });

    exports = factory.apply(global, dependencies);

    if (exports) {
      module.exports = exports;
      // !!! Highcharts exception
      if (
        !id &&
        exports.product &&
        typeof exports.product === 'string' &&
        exports.product.toLowerCase() === 'highcharts'
      ) {
        id = 'highcharts';
        if (global[exports.product] === undefined) {
          global[exports.product] = exports;
        }
      }
    }

    if (id) {
      module.id = id;
      loadedModules[id] = module.exports;
      evaluateQueuedModules(id);
    } else if (
      exports &&
      typeof exports === 'function' &&
      (exports.toString().indexOf('highcharts') !== -1 ||
        exports.toString().indexOf('chart') !== -1)
    ) {
      // !!! Highcharts exception: register the module w/ Highcharts
      try {
        exports(global.Highcharts);
      } catch (error) {
        console.log(error);
      }
    }
  };
  var evaluateQueuedModules = function(id) {
    var module;
    var i = 0;
    while (i < queuedModules.length) {
      module = queuedModules[i];
      if (dependenciesAreLoaded(module[1])) {
        queuedModules.splice(i, 1);
        loadModule.apply(undefined, module);
      } else {
        i++;
      }
    }
  };
  var define = function(id, dependencies, factory) {
    // `define(id, dependencies, factory)`
    // `define(dependencies, factory)`
    // `define(id, factory)`
    // `define(factory)`

    var args = Array.prototype.slice.call(arguments);
    var toString = function(object) {
      return Object.prototype.toString.call(object);
    };
    var object;

    if (toString(args[0]) === '[object String]') {
      id = args.shift();
    } else {
      id = undefined;
    }

    if (id && (loadedModules[id] || inQueue(id))) {
      return;
    }

    if (toString(args[0]) === '[object Array]') {
      dependencies = args.shift();
    } else {
      dependencies = ['require', 'exports', 'module'];
    }

    if (toString(args[0]) === '[object Object]') {
      object = args.shift();
      factory = function() {
        return object;
      };
    } else {
      factory = args.shift();
    }

    if (dependenciesAreLoaded(dependencies)) {
      loadModule(id, dependencies, factory);
    } else {
      queueModule(id, dependencies, factory);
    }
  };

  define.amd = {};

  define('require', [], function factory() {
    return function require(id) {
      if (typeof id === 'string') {
        return loadedModules[id];
      }
      define.apply(global, arguments);
    };
  });

  define('exports', [], function factory() {});
  define('module', [], function factory() {});

  if (typeof module === 'object' && typeof exports === 'object') {
    module.exports = define;
  } else {
    global.define = define;
    global.$__amd = {
      loadedModules: loadedModules,
      queuedModules: queuedModules,
    };
    if (global.__amd$delayedDefines) {
      global.__amd$delayedDefines.forEach(function factory(def) {
        def();
      });
      global.__amd$delayedDefines = [];
    }
  }
})(window || global || {});

/* eslint func-names: ["error", "as-needed"] */

// JAVASCRIPT GERANT L'AFFICHAGE GENERIQUE DES PAGES DES SITES EUROPARL
// Copyright : European Parliament

// Classes JS definies dans ce fichier :
//	. Select 				: Script convertissant un selecteur <select> en composant JavaScript personnalisable
//	. Accordion 			: Script convertissant l'affichage en accordeon (expand/collapse [+]/[-])

// Fonctionnalites JS gerees par ce fichier :
//	. detection du support/device utilise pour visionner le site (mobile/desktop)
//	. affichage parallaxe de la barre d'outil inferieure
//	. ouverture/fermeture du menu de recherche en mode reduit
//	. ouverture/fermeture du menu de navigation en mode reduit
//	. navigation clavier dans le menu de navigation
//	. convertion des selecteurs <select> presents dans l'entete en composant JavaScript
//	. convertion de la liste des sites "other websites" en select JS pour le mode reduit
//	. affichage accordeon du pied de page en mode reduit
//	. gestion de l'affichage sur les menus lateraux (effet parallaxe + mode accordeon)

/* ============================================================================================================================================================================ */
/* === CONVERTION DES SELECTEURS STATIQUES EN VERSION DYNAMIQUE =============================================================================================================== */
/* ============================================================================================================================================================================ */

var Select = (function Select() {
  var Data = { convertlist: [], reference: {} };

  // - VALIDATION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // VALIDATION : controle de l'objet de donnees passe en parametre
  function check(d) {
    if (typeof d === 'object') {
      if (d != null) {
        return d.tagName != null;
      }
      return false;
    }
    return false;
  }
  // VALIDATION : convertion du text
  function clean(t) {
    return typeof t === 'string'
      ? t
          .replace(/&amp;/g, '&')
          .replace(/&nbsp;/g, ' ')
          .replace(/&#039;/g, "'")
      : t;
  }

  // - CONVERTION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // Fonction initiale convertissant un selecteur en version JS
  function askconvertion(tag, params) {
    var result = { converted: false, data: null };
    if (typeof tag === 'string') tag = document.getElementById(tag);
    if (check(tag)) {
      if (!tag.getAttribute('data-selectconverted')) {
        if (tag.tagName.toLowerCase() == 'select') {
          // Traitement des selecteurs classiques <select>
          result = convert(tag, params);
        } else if (
          tag.tagName.toLowerCase() == 'div' &&
          tag.classList.contains('ep_fakeselect')
        ) {
          // Traitement des faux selecteurs HTML
          var i;
          var l;
          var m;
          var s;
          var o;
          var r = -1;
          // Creation du selecteur
          s = document.createElement('select');
          s.classList.add('ep_field');
          s.setAttribute('id', tag.id);
          // Recherche des liens a indexer
          l = tag.getElementsByClassName('ep_option');
          m = l.length;
          for (i = 0; i < m; i++) {
            if (
              l[i].getElementsByClassName('ep_name').length > 0 &&
              l[i].getElementsByTagName('a').length > 0
            ) {
              // Creation de la balise
              o = document.createElement('option');
              o.appendChild(
                document.createTextNode(
                  l[i].getElementsByClassName('ep_name')[0].innerHTML
                )
              );
              // Analyse de l'etat
              o.setAttribute('value', l[i].getElementsByTagName('a')[0].href);
              // Ajout de la selection
              if (l[i].classList.contains('ep_selected')) {
                o.setAttribute('selected', 'selected');
                r = i;
              }
              // Integration de la balise
              s.appendChild(o);
            }
          }
          if (s.childNodes.length > 1) {
            // Ajout du placeholder et du label si necessaire
            l = null;
            i = tag.getElementsByClassName('ep_label');
            if (i.length > 0) {
              i = i[0].getElementsByClassName('ep_name');
              if (i.length > 0) {
                // Creation de l'option
                o = document.createElement('option');
                o.appendChild(document.createTextNode(i[0].innerHTML));
                o.setAttribute('value', 'placeholder');
                o.setAttribute('disabled', 'disabled');
                if (r < 0) o.setAttribute('selected', 'selected');
                s.insertBefore(o, s.getElementsByTagName('option')[0]);
                // Creation du libelle
                l = document.createElement('label');
                l.setAttribute('for', s.id);
                r = document.createElement('span');
                r.classList.add('ep_name');
                r.appendChild(document.createTextNode(i[0].innerHTML));
                l.appendChild(r);
                r = document.createElement('span');
                r.classList.add('ep_icon');
                l.appendChild(r);
              }
            }
            // Ajout du container du selecteur
            m = document.createElement('div');
            m.classList.add('ep_select');
            // Integration du selecteur
            if (l != null) m.appendChild(l);
            m.appendChild(s);
            // Remplacement du selecteur par la nouvelle balise <select>
            tag.parentNode.insertBefore(m, tag);
            tag.parentNode.removeChild(tag);
            // Envoi de la convertion
            result = convert(s, params);
          }
        }
      }
      return result;
    }
    // Appel de la fonction "callback" apres la convertion du selecteur si demandee
    var b = false;
    if (params != null) {
      if (typeof params === 'object') {
        if (typeof params.cb_afterconvert === 'function') b = true;
      }
    }
    if (b) params.cb_afterconvert(result.converted, result.data);
    // Envoi du resultat de la demande
    return result;
  }
  function convert(tag, params) {
    // Definition des arguments
    // 	> tag 							// [NODE]		(mandatory) 	: Reference de la balise <select> du selecteur a convertir
    // 	> params						// [OBJECT]		(optional)		: Liste de parametres a mettre a jour
    // Variables utiles
    var i;
    var m;
    var o;
    var t;
    var b;
    var l;
    var g;
    var h;
    var data = null;
    // Verification de la balise transmise en parametre
    if (
      tag.tagName.toLowerCase() == 'select' &&
      !tag.getAttribute('data-selectconverted')
    ) {
      // Blocage de la convertion
      tag.setAttribute('data-selectconverted', true);
      // Verification de la presence d'un ID valide
      if (
        typeof tag.id !== 'string' ||
        tag.id == undefined ||
        tag.id == null ||
        String(tag.id).length < 2
      ) {
        i = new Date();
        tag.setAttribute(
          'id',
          'selectID_' +
            (i.getHours() * 3600000 +
              i.getMinutes() * 60000 +
              i.getSeconds() * 1000 +
              i.getMilliseconds())
        );
      }
      // Analyse de l'objet de parametre
      if (typeof params !== 'object') {
        params = {};
      } else if (params == null) {
        params = {};
      }
      // Definition de l'objet
      // 	> params.autoexecute 																			// [BOOLEAN] (default value: false)			: Definit si le formulaire doit etre execute au changement de valeur du selecteur
      // 	> params.forceplaceholder																		// [BOOLEAN] (default value: false)			: Definit si le selecteur doit etre parametre sur le placeholder
      // 	> params.editable 																				// [BOOLEAN] (default value: false)			: Definit si le champ d'ouverture du selecteur peut etre editable et ayant un systeme d'autocompletion via la liste
      // 	> params.usetextcustom																			// [BOOLEAN] (default value: false)			: Definit si la valeur affichee dans le selecteur converti est la valeur de la balise option ou le libelle
      // 	> params.openbykeyboard																			// [BOOLEAN] (default value: true)			: Definit si le selecteur doit se deployer lors de la navigation clavier
      // 	> params.viewdisabled																			// [BOOLEAN] (default value: false)			: Definit si le selecteur doit afficher ou non les options non accessible
      // 	> params.cb_afterconvert																		// [FUNCTION] (need a return value = true)	: Fonction appelee apres la convertion du selecteur
      // 	> params.cb_beforeopen																			// [FUNCTION] (need a return value = true)	: Fonction appelee avant l'ouverture  de la liste du selecteur
      // 	> params.cb_afteropen																			// [FUNCTION] (need a return value = true)	: Fonction appelee apres l'ouverture  de la liste du selecteur
      // 	> params.cb_beforeclose																			// [FUNCTION] (need a return value = true)	: Fonction appelee avant la fermeture de la liste du selecteur
      // 	> params.cb_afterclose																			// [FUNCTION] (need a return value = true)	: Fonction appelee apres la fermeture de la liste du selecteur
      // 	> params.cb_beforesubmit																		// [FUNCTION] (need a return value = true)	: Fonction appelee avant l'execution du formulaire (si mode "autoexecute")
      // 	> params.cb_aftersubmit																			// [FUNCTION] (need a return value = true)	: Fonction appelee apres l'execution du formulaire (si mode "autoexecute")
      // 	> params.cb_selection																			// [FUNCTION] (need a return value = true)	: Fonction appelee lors de la selection du selecteur
      // 	> params.cb_updatefield																			// [FUNCTION] (need a return value = true)	: Fonction appelee apres l'edition du champ texte (si mode "editable")
      // Initialisation de l'objet de donnees du selecteur
      data = {};
      data.id = tag.id; // [STRING]									: Identifiant de la balise originale
      data.reference = 'selectconvertid_' + data.id; // [STRING]									: Identifiant de la balise convertie
      console.log(data.reference);
      data.index = null; // [INT]									: Identifiant du selecteur dans le listing
      data.options = null; // [ARRAY] 									: Liste d'objets reprenant les donnees des options originales du selecteur
      data.placeholder = null; // [NODE] 									: Option contenant le placeholder pour le calcul de taille
      data.viewoptions = null; // [ARRAY] 									: Liste d'objets reprenant les donnees des options affichees dans la liste
      data.availableoptions = null; // [ARRAY] 									: Liste d'objets reprenant les donnees des options accessibles (non disabled) affichees dans la liste
      data.original = tag; // [NODE] 									: Selecteur original
      data.button = {
        tag: null,
        text: null,
        icon: null,
        size: null,
        icontext: null,
      }; // [OBJECT]									: Bouton d'ouverture/fermeture (balise principale et balise de texte)
      data.container = null; // [NODE] 									: Conteneur du selecteur converti
      data.form = null; // [NODE] 									: Formulaire contenant le selecteur converti
      data.dropdown = null; // [NODE] 									: Conteneur des balises "option" converties
      data.dropdownlist = null; // [NODE] 									: Conteneur de la balise "liste" des "option" converties
      data.animatedopen = null; // [NODE] 									: Conteneur supportant les animations d'ouverture
      data.callback = {};
      data.callback.beforeopen = null; // [FUNCTION] 								: Fonction a appeler avant l'ouverture du selecteur
      data.callback.afteropen = null; // [FUNCTION] 								: Fonction a appeler apres l'ouverture du selecteur
      data.callback.beforeclose = null; // [FUNCTION] 								: Fonction a appeler avant la fermeture du selecteur
      data.callback.afterclose = null; // [FUNCTION] 								: Fonction a appeler apres la fermeture du selecteur
      data.callback.beforesubmit = null; // [FUNCTION] 								: Fonction a appeler avant l'execution du formulaire parent
      data.callback.aftersubmit = null; // [FUNCTION] 								: Fonction a appeler apres l'execution du formulaire parent
      data.callback.updatefield = null; // [FUNCTION] 								: Fonction a appeler apres la mise a jour du champ texte
      // Sauvegarde des donnees passees par parametre
      data.usetextcustom = Boolean(params.usetextcustom);
      data.forceplaceholder = Boolean(params.forceplaceholder);
      function alwaysTrue() {
        return true;
      }
      data.autoexecute =
        typeof params.autoexecute === 'boolean'
          ? Boolean(params.autoexecute)
          : null;
      data.editable = Boolean(params.editable);
      data.openbykeyboard =
        typeof params.openbykeyboard === 'boolean'
          ? Boolean(params.openbykeyboard)
          : true;
      data.callback.beforeopen =
        typeof params.cb_beforeopen === 'function'
          ? params.cb_beforeopen
          : alwaysTrue;
      data.callback.afteropen =
        typeof params.cb_afteropen === 'function'
          ? params.cb_afteropen
          : alwaysTrue;
      data.callback.beforeclose =
        typeof params.cb_beforeclose === 'function'
          ? params.cb_beforeclose
          : alwaysTrue;
      data.callback.afterclose =
        typeof params.cb_afterclose === 'function'
          ? params.cb_afterclose
          : alwaysTrue;
      data.callback.beforesubmit =
        typeof params.cb_beforesubmit === 'function' && data.autoexecute
          ? params.cb_beforesubmit
          : alwaysTrue;
      data.callback.aftersubmit =
        typeof params.cb_aftersubmit === 'function' && data.autoexecute
          ? params.cb_aftersubmit
          : alwaysTrue;
      data.callback.updatefield =
        typeof params.cb_updatefield === 'function' && data.editable
          ? params.cb_updatefield
          : null;
      data.callback.selection =
        typeof params.cb_selection === 'function'
          ? params.cb_selection
          : alwaysTrue;
      data.disabledview =
        params.viewdisabled === true
          ? true
          : tag.getAttribute('data-viewdisabled') == 'true' ||
            tag.getAttribute('data-viewdisabled') === true;
      // Recherche du formulaire responsable du selecteur
      i = tag.parentNode;
      while (check(i) && i.tagName.toLowerCase() != 'form') {
        i = i.parentNode;
      }
      if (check(i)) {
        if (i.tagName.toLowerCase() == 'form') data.form = i;
      }
      // Identification de l'autocompletion
      if (data.autoexecute == null && data.form != null)
        data.autoexecute = Boolean(
          data.form.getAttribute('data-autoexecute') == 'true'
        );
      // Creation du conteneur du module
      data.container = document.createElement('div');
      data.container.classList.add('epjs_select');
      data.container.setAttribute('data-reference', data.reference);
      // Creation de la liste des boutons
      data.dropdownlist = document.createElement('ol');
      data.dropdownlist.setAttribute('id', data.reference + '-listbox');
      data.dropdownlist.setAttribute('tabindex', '-1');
      data.dropdownlist.setAttribute(
        'aria-controls',
        data.reference + '-openingbutton'
      );
      data.dropdownlist.setAttribute('aria-expanded', false);
      data.dropdownlist.setAttribute('role', 'listbox');
      // Obtention des donnees de l'option
      data.dropdown = document.createElement('fieldset');
      data.dropdown.classList.add('epjs_dropdown');
      data.dropdown.setAttribute('tabindex', -1);
      if (data.disabledview)
        data.dropdown.setAttribute('data-viewdisabled', true);
      data.animatedopen = document.createElement('div');
      data.animatedopen.classList.add('epjs_list');
      data.animatedopen.setAttribute('tabindex', '-1');
      data.dropdown.appendChild(data.animatedopen);
      o = tag.getElementsByTagName('option');
      m = o.length;
      g = { original: null };
      data.options = [];
      data.viewoptions = [];
      data.availableoptions = [];
      if (document.body.getAttribute('data-ismobile')) {
        for (i = 0; i < m; i++) {
          // Sauvegarde des references
          data.options.push({
            original: o[i],
            convert: { button: null, text: null },
            text: clean(o[i].innerHTML),
            textcustom: clean(o[i].getAttribute('data-textcustom')),
            value: o[i].value,
            index: i,
          });
          data.viewoptions.push(data.options.length - 1);
          if (!o[i].getAttribute('disabled'))
            data.availableoptions.push(data.options.length - 1);
        }
        // Verificiation du forcage du placeholder
        if (data.forceplaceholder && data.options[0].value == 'placeholder') {
          data.original.selectedIndex = 0;
        }
      } else {
        for (i = 0; i < m; i++) {
          // Creation du bouton
          b = document.createElement('span');
          b.classList.add('epjs_option');
          if (o[i].getAttribute('disabled'))
            b.setAttribute('data-disabled', true);
          if (o[i].getAttribute('class'))
            b.classList.add(o[i].getAttribute('class'));
          b.setAttribute('data-type', 'option');
          b.setAttribute('data-index', i);
          t = document.createElement('span');
          t.classList.add('epjs_name');
          if (o[i].getAttribute('data-additionaltext')) {
            l = document.createElement('span');
            l.classList.add('epjs_additionaltext');
            l.appendChild(
              document.createTextNode(o[i].getAttribute('data-additionaltext'))
            );
            t.appendChild(l);
          }
          l = document.createElement('span');
          l.classList.add('epjs_text');
          l.appendChild(document.createTextNode(clean(o[i].innerHTML)));
          t.appendChild(l);
          b.appendChild(t);
          t = document.createElement('span');
          t.classList.add('epjs_icon');
          t.appendChild(document.createTextNode(' '));
          b.appendChild(t);
          // Sauvegarde des references
          data.options.push({
            original: o[i],
            convert: { button: b, text: t },
            text: clean(o[i].innerHTML),
            textcustom: clean(o[i].getAttribute('data-textcustom')),
            value: o[i].value,
            index: i,
          });
          // Creation de la balise conteneur
          t = document.createElement('li');
          t.classList.add('epjs_item');
          t.setAttribute('role', 'option');
          t.setAttribute('item', data.viewoptions.length);
          t.setAttribute('tabindex', '-1');
          if (o[i].getAttribute('title'))
            t.setAttribute('title', o[i].getAttribute('title'));
          t.appendChild(b);
          if (o[i].value.toLowerCase() != 'placeholder') {
            // Encodage de la balise dans la liste
            data.dropdownlist.appendChild(t);
            // Indexation des options valides
            data.viewoptions.push(data.options.length - 1);
            if (!o[i].getAttribute('disabled'))
              data.availableoptions.push(data.options.length - 1);
          } else {
            // Ajout de la classe pour la non prise en compte de la hauteur
            t.classList.add('epjs_placeholder');
            // Sauvegarde de la reference
            data.placeholder = t;
          }
          // Traitement visuel des "optgroup"
          if (o[i].parentNode.tagName.toLowerCase() == 'optgroup') {
            // Identification du lien de second niveau
            t.classList.add('epjs_subitem');
            // Creation de la liste de second niveau si necessaire
            if (o[i].parentNode != g.original) {
              // Creation de la liste
              g = {
                original: o[i].parentNode,
                tag: document.createElement('ul'),
                title: null,
              };
              g.tag.classList.add('epjs_group');
              b = document.createElement('li');
              b.classList.add('epjs_item');
              b.appendChild(g.tag);
              data.dropdownlist.insertBefore(b, t);
              // Ajout du titre
              if (o[i].parentNode.getAttribute('data-viewlabel') != 'false') {
                g.title = document.createElement('div');
                g.title.classList.add('epjs_grouptitle');
                b.insertBefore(g.title, g.tag);
                h = document.createElement('span');
                h.classList.add('epjs_name');
                h.appendChild(
                  document.createTextNode(o[i].parentNode.getAttribute('label'))
                );
                g.title.appendChild(h);
                h = document.createElement('span');
                h.classList.add('epjs_icon');
                h.appendChild(document.createTextNode(' '));
                g.title.appendChild(h);
              }
            }
            // Deplacement du lien dans la liste
            g.tag.appendChild(t);
          }
        }
        // Verificiation du forcage du placeholder
        if (data.forceplaceholder && data.options[0].value == 'placeholder') {
          data.original.selectedIndex = -1;
        }
        // Detection de la selection
        if (data.original.selectedIndex >= 0) {
          data.options[data.original.selectedIndex].convert.button.setAttribute(
            'data-selected',
            true
          );
          data.options[data.original.selectedIndex].convert.button.setAttribute(
            'aria-selected',
            true
          );
        } else if (data.options[0].value == 'placeholder') {
          data.original.selectedIndex = 0;
          data.options[data.original.selectedIndex].convert.button.setAttribute(
            'data-selected',
            true
          );
          data.options[data.original.selectedIndex].convert.button.setAttribute(
            'aria-selected',
            true
          );
        }
        data.animatedopen.appendChild(data.dropdownlist);
      }
      // Obtention des traductions du bouton "open/close"
      i = document.body.getAttribute('lang');
      if (typeof i !== 'object' || String(i).length != 2)
        i = document.getElementsByTagName('html')[0].getAttribute('lang');
      i = String(i).toLowerCase();
      l = { open: '', close: '' };
      switch (i) {
        case 'bg':
          l.open = 'Отваряне на менюто';
          l.close = 'Затваряне на менюто';
          break;
        case 'cs':
          l.open = 'Otevřít menu';
          l.close = 'Zavřít menu';
          break;
        case 'da':
          l.open = 'Åbn menu';
          l.close = 'Luk menu';
          break;
        case 'de':
          l.open = 'Menü ausklappen';
          l.close = 'Menü einklappen';
          break;
        case 'el':
          l.open = 'Άνοιγμα του μενού';
          l.close = 'Κλείσιμο του μενού';
          break;
        case 'es':
          l.open = 'Abrir menú';
          l.close = 'Cerrar menú';
          break;
        case 'et':
          l.open = 'Ava menüü';
          l.close = 'Sulge menüü';
          break;
        case 'fi':
          l.open = 'Avaa valikko';
          l.close = 'Sulje valikko';
          break;
        case 'fr':
          l.open = 'Oscail an roghchlár';
          l.close = 'Dún an roghchlár';
          break;
        case 'ga':
          l.open = 'Open menu';
          l.close = 'Close menu';
          break;
        case 'hr':
          l.open = 'Otvori izbornik';
          l.close = 'Zatvori izbornik';
          break;
        case 'hu':
          l.open = 'Menü megnyitása';
          l.close = 'Menü bezárása';
          break;
        case 'it':
          l.open = 'Apri menù';
          l.close = 'Chiudi menù';
          break;
        case 'lt':
          l.open = 'Atverti meniu';
          l.close = 'Uždaryti meniu';
          break;
        case 'lv':
          l.open = 'Atvērt izvēlni';
          l.close = 'Aizvērt izvēlni';
          break;
        case 'mt':
          l.open = 'Iftaħ il-menu';
          l.close = 'Agħlaq il-menu';
          break;
        case 'nl':
          l.open = 'Menu openen';
          l.close = 'Menu sluiten';
          break;
        case 'pl':
          l.open = 'Wyświetl menu';
          l.close = 'Zamknij menu';
          break;
        case 'pt':
          l.open = 'Abrir lista';
          l.close = 'Fechar lista';
          break;
        case 'ro':
          l.open = 'Desfășurare meniu';
          l.close = 'Închidere meniu';
          break;
        case 'sk':
          l.open = 'Otvoriť menu';
          l.close = 'Zatvoriť menu';
          break;
        case 'sl':
          l.open = 'Odpri meni';
          l.close = 'Zapri meni';
          break;
        case 'sv':
          l.open = 'Öppna menyn';
          l.close = 'Stäng menyn';
          break;
        case 'en':
        default:
          l.open = 'Open menu';
          l.close = 'Close menu';
          break;
      }
      // Creation du libelle
      data.button.tag = document.createElement('div');
      data.button.tag.classList.add('epjs_button');
      if (document.body.getAttribute('data-ismobile')) {
        data.button.tag.setAttribute('tabindex', '-1');
        data.button.size = document.createElement('span');
        data.button.size.classList.add('epjs_size');
        data.button.size.setAttribute('tabindex', '-1');
        data.button.text = document.createElement('input');
        data.button.text.classList.add('epjs_name');
        data.button.text.setAttribute('tabindex', '-1');
        data.button.text.id = data.reference + '-valuetext';
        data.button.icon = document.createElement('span');
        data.button.icon.classList.add('epjs_icon');
        data.button.icon.appendChild(document.createTextNode(' '));
      } else {
        data.button.size = document.createElement('span');
        data.button.size.classList.add('epjs_size');
        data.button.size.setAttribute('tabindex', '-1');
        data.button.text = document.createElement('input');
        data.button.text.id = data.reference + '-valuetext';
        data.button.text.classList.add('epjs_name');
        data.button.text.setAttribute('type', 'text');

        var labelForButton = document.createElement('label');
        labelForButton.setAttribute('for', data.button.text.id);
        labelForButton.classList.add('ep_hidden');
        setTimeout(function(){
          labelForButton.innerHTML = data.button.text.value;
        },1000)


        if (!data.editable) {
          data.button.tag.classList.add('epjs_static');
          data.button.text.setAttribute('readonly', 'readonly');
          data.button.text.setAttribute('aria-readonly', 'true');
        } else {
          data.button.text.setAttribute('role', 'textbox');
          data.button.text.setAttribute('autocomplete', 'off');
          data.button.text.setAttribute('aria-autocomplete', 'list');
        }
        if (!data.editable) {
          data.button.icon = document.createElement('span');
          data.button.icon.classList.add('epjs_icon');
          data.button.icon.appendChild(document.createTextNode(' '));
          data.button.icontext = document.createElement('span');
        } else {
          data.button.icon = document.createElement('button');
          data.button.icon.classList.add('epjs_icon');
          data.button.icon.setAttribute('type', 'button');
          data.button.icon.setAttribute('data-openlabel', l.open);
          data.button.icon.setAttribute('data-closelabel', l.close);
          data.button.icon.id = data.reference + '-openingbutton';
          data.button.icontext = document.createElement('span');
          data.button.icontext.appendChild(document.createTextNode(l.open));
          data.button.icon.appendChild(data.button.icontext);
        }
      }
      data.button.tag.appendChild(data.button.size);
      data.button.tag.appendChild(labelForButton);
      data.button.tag.appendChild(data.button.text);
      data.button.tag.appendChild(data.button.icon);
      if (data.original.selectedIndex < 0) {
        data.button.text.appendChild(document.createTextNode(' '));
      } else if (params.usetextcustom) {
        data.button.text.value =
          data.options[data.original.selectedIndex].textcustom;
        data.button.tag.setAttribute(
          'title',
          data.options[data.original.selectedIndex].text
        );
      } else {
        data.button.text.value = data.options[data.original.selectedIndex].text;
      }
      if (data.original.selectedIndex >= 0) {
        if (data.options[data.original.selectedIndex].value == 'placeholder')
          data.button.tag.setAttribute('data-placeholder', true);
      }
      if (!document.body.getAttribute('data-ismobile') && data.editable) {
        if (data.options[0].value == 'placeholder') {
          data.button.text.setAttribute(
            'placeholder',
            params.usetextcustom
              ? data.options[0].textcustom
              : data.options[0].text
          );
          if (data.options[data.original.selectedIndex].value == 'placeholder')
            data.button.text.value = '';
        }
      }
      // Recherche du label associe au selecteur
      l = null;
      if (data.form != null) {
        t = data.form.getElementsByTagName('label');
        i = t.length - 1;
        for (i = i; i >= 0; i--) {
          if (t[i].htmlFor == data.id) {
            if (typeof t[i].id !== 'string' || t[i].id.length <= 0) {
              t[i].id = data.reference + '-labelselect';
            }
            data.button.text.setAttribute('aria-labelledby', t[i].id);
            break;
          }
        }
      }
      // Integration des elements principaux
      data.container.appendChild(data.button.tag);
      data.container.appendChild(data.dropdown);
      // Integration du module dans la page
      // Ajout des classes aux conteneurs
      data.form != null
        ? data.form.classList.add('epjs_selectconvert')
        : data.original.parentNode.parentNode.classList.add(
            'epjs_selectconvert'
          );
      data.original.parentNode.classList.add('epjs_converted');
      // Integration de la balise
      data.original.parentNode.insertBefore(data.container, data.original);
      data.container.appendChild(data.original);
      // Ajout des classes necessaires a la detection de clic
      l = data.container.getElementsByTagName('*');
      m = l.length;
      for (i = 0; i < m; i++) {
        l[i].classList.add(data.reference);
      }
      // Sauvegarde des donnees dans la classe
      Data.convertlist.push(data);
      Data.reference[data.id] = Data.convertlist.length - 1;
      data.index = Data.convertlist.length - 1;
      i = data.index;
      if (document.body.getAttribute('data-ismobile')) {
        data.button.tag.tabIndex = -1;
        data.original.addEventListener('focus', function(e) {
          state(e, i);
        });
        data.original.addEventListener('blur', function(e) {
          state(e, i);
        });
        data.original.addEventListener('change', function(e) {
          return select(this, i);
        });
        // Calcul de la largeur du champ visible
        data.button.size.innerHTML = data.button.text.value;
        data.button.text.style.width = data.button.size.offsetWidth + 5 + 'px';
        data.button.size.removeAttribute('style');
        data.button.size.innerHTML = '';
      } else {
        // Calcul de la largeur du selecteur
        if (data.callback.updatefield != null) updatelist(null, i);
        //calcul(data, null, false);
        // Ajout des evenements
        // Selection du menu au clavier
        if (!data.editable) {
          data.button.text.addEventListener('click', function(e) {
            data.button.text.select();
          });
        }
        data.button.text.addEventListener('focus', function(e) {
          state(e, i);
        });
        data.button.text.addEventListener('blur', function(e) {
          state(e, i);
        });
        data.button.icon.addEventListener('focus', function(e) {
          state(e, i, true);
        });
        data.button.icon.addEventListener('blur', function(e) {
          state(e, i, true);
        });
        // Blocage du selecteur pour le clavier
        data.original.setAttribute('tabindex', '-1');
        // Ajout des actions d'ouverture et de navigation
        data.button.tag.addEventListener('click', function(e) {
          return view(e, i);
        });
        data.button.tag.addEventListener('keydown', function(e) {
          return keyboard(e, i);
        });
        if (data.callback.updatefield != null) {
          data.button.text.addEventListener('paste', function(e) {
            setTimeout(function() {
              updatelist(e, i);
            }, 5);
          });
          data.button.tag.addEventListener('keyup', function(e) {
            return updatelist(e, i);
          });
        }
        // Ajout de l'action de fermeture au clic dans et hors du menu ou au redimensionnement de la fenetre
        document.addEventListener(
          'click',
          function(e) {
            return clickout(e, i);
          },
          false
        );
        document.addEventListener(
          'resize',
          function(e) {
            return clickout(e, i);
          },
          false
        );
        // Ajout de l'action de traitement de la balise "select"
        data.original.addEventListener('change', function(e) {
          return select(this, i);
        });
        // Ajout de l'action de selection des boutons
        m = data.options.length;
        for (b = 0; b < m; b++) {
          data.options[b].convert.button.addEventListener('mouseup', function(
            e
          ) {
            return select(this, i);
          });
          data.options[b].convert.button.addEventListener('keydown', function(
            e
          ) {
            return keyboard(e, i);
          });
        }
        // Ajout de l'action de fermeture au redimensionnement
        window.addEventListener(
          'resize',
          function(e) {
            return resize(i);
          },
          false
        );
      }
    }
    // Envoi du resultat de la demande
    return { converted: data != null, data: data };
  }
  // Fonction publique a appeler afin de mettre a jour les parametres definis lors de la convertion
  function updatedata(reference, params) {
    return updateparams(reference, params, false);
  }
  function updateparams(reference, params, reseting) {
    // Definition des arguments
    // 	> reference 					// [NODE/STRING/NUMBER/OBJECT]	: Reference du selecteur converti a manipuler
    //																		> NODE: 	identification via la balise du selecteur converti
    //																		> OBJECT: 	identification via l'objet de donnees issu de la convertion du selecteur
    //																		> NUMBER: 	identification via l'index de convertion renvoye par la fonction "convert"
    //																		> STRING: 	identification via l'id du selecteur original converti
    // 	> params						// [OBJECT]						: Liste de parametres a mettre a jour
    //																		> la definition de l'objet doit etre identique a l'objet de donnees passe en parametre lors de la convertion
    // 	> reseting						// [BOOLEAN]	(system)		: Defini si l'appel de la fonction est interne ou public
    // Variable a renvoyer apres traitement de la demande
    var executed = false;
    var finalmessage = 'unknown error';
    var d = null;
    // Verification du type d'objet transmis
    if (typeof params !== 'object') {
      params = null;
    } else if (params == null) {
      params = null;
    }
    if (reference != null && params != null) {
      var d = null;
      // Identification de l'objet de donnees
      if (reseting === true) d = reference;
      else if (typeof reference === 'object') {
        // >> reference = objet de donnees renvoyes par le widget a sa creation
        if (!isNaN(reference.index)) {
          d = Data.convertlist[reference.index];
        } else if (
          typeof reference.tagName === 'string' &&
          String(reference.tagName).toLowerCase() == 'select' &&
          reference.getAttribute('data-selectconverted')
        ) {
          if (!isNaN(Data.reference[reference.id])) {
            // >> reference = balise HTML du selecteur original
            d = Data.convertlist[Data.reference[reference]];
          }
        }
      } else if (!isNaN(reference)) {
        // >> reference = index de convertion du composant
        d = Data.convertlist[reference];
      } else if (typeof reference === 'string') {
        // >> reference = reference (ID) du composant
        if (!isNaN(Data.reference[reference])) {
          d = Data.convertlist[Data.reference[reference]];
        }
      }
      // Validation de l'objet obtenu
      if (d != null) {
        if (!isNaN(d.index)) {
          var i;
          executed = true;
          // Mise a jour des parametres transmis
          for (i in params) {
            switch (i) {
              case 'usetextcustom':
                d.usetextcustom = Boolean(params.usetextcustom);
                break;
              case 'autoexecute':
                d.autoexecute = Boolean(params.autoexecute);
                break;
              case 'openbykeyboard':
                d.openbykeyboard =
                  typeof params.openbykeyboard === 'boolean'
                    ? Boolean(params.openbykeyboard)
                    : true;
                break;
              case 'cb_beforeopen':
                d.callback.beforeopen =
                  typeof params.cb_beforeopen === 'function'
                    ? params.cb_beforeopen
                    : function() {
                        return true;
                      };
                break;
              case 'cb_afteropen':
                d.callback.afteropen =
                  typeof params.cb_afteropen === 'function'
                    ? params.cb_afteropen
                    : function() {
                        return true;
                      };
                break;
              case 'cb_beforeclose':
                d.callback.beforeclose =
                  typeof params.cb_beforeclose === 'function'
                    ? params.cb_beforeclose
                    : function() {
                        return true;
                      };
                break;
              case 'cb_afterclose':
                d.callback.afterclose =
                  typeof params.cb_afterclose === 'function'
                    ? params.cb_afterclose
                    : function() {
                        return true;
                      };
                break;
              case 'cb_beforesubmit':
                d.callback.beforesubmit =
                  typeof params.cb_beforesubmit === 'function' &&
                  (d.autoexecute || params.autoexecute)
                    ? params.cb_beforesubmit
                    : function() {
                        return true;
                      };
                break;
              case 'cb_aftersubmit':
                d.callback.aftersubmit =
                  typeof params.cb_aftersubmit === 'function' &&
                  (d.autoexecute || params.autoexecute)
                    ? params.cb_aftersubmit
                    : function() {
                        return true;
                      };
                break;
              case 'cb_updatefield':
                d.callback.updatefield =
                  typeof params.cb_updatefield === 'function' && d.editable
                    ? params.cb_updatefield
                    : null;
                break;
              case 'cb_selection':
                d.callback.selection =
                  typeof params.cb_selection === 'function'
                    ? params.cb_selection
                    : function() {
                        return true;
                      };
                break;
              case 'viewdisabled':
                d.disabledview =
                  params.viewdisabled === true
                    ? true
                    : tag.getAttribute('data-viewdisabled') == 'true' ||
                      tag.getAttribute('data-viewdisabled') === true;
                break;
            }
          }
          // Mise a jour de la valeur d'affichage
          if (d.disabledview)
            d.dropdown.setAttribute('data-viewdisabled', true);
          else d.dropdown.removeAttribute('data-viewdisabled');
        } else {
          d = null;
          finalmessage = 'not recognized select tag';
        }
      } else finalmessage = 'not recognized select tag';
    } else if (params == null) finalmessage = 'invalid parameter object';
    // Envoi du resultat de la demande
    return {
      executed: executed,
      data: d,
      message: executed ? '' : finalmessage,
    };
  }
  // Fonction publique a appeler afin de selectionner une valeur specifique dans le selecteur
  function updateselection(reference, selectedvalue, autoexecute) {
    // Definition des arguments
    // 	> reference 					// [NODE/STRING/NUMBER/OBJECT]	: Reference du selecteur converti a manipuler
    //																		> NODE: 	identification via la balise du selecteur converti
    //																		> OBJECT: 	identification via l'objet de donnees issu de la convertion du selecteur
    //																		> NUMBER: 	identification via l'index de convertion renvoye par la fonction "convert"
    //																		> STRING: 	identification via l'id du selecteur original converti
    // 	> selectedvalue					// [STRING]						: valeur de la balise "option" du selecteur original a selectioner
    // 	> autoexecute					// [BOOLEAN] (optional)			: demande d'execution du formulaire et des callback du selecteur
    //																		> true: 			execution forcee du formulaire
    //																		> false: 			blocage de l'execution du formulaire et des callback intermediaires des selecteurs
    //																		> null/undefined: 	execution du formulaire selon les parametres definis dans le selecteur
    // Variable a renvoyer apres traitement de la demande
    var executed = false;
    var finalmessage = 'unknown error';
    var d = null;
    // Verification de la selection
    if (typeof selectedvalue === 'number')
      selectedvalue = String(selectedvalue);
    if (reference != null && typeof selectedvalue === 'string') {
      // Identification de l'objet de donnees
      if (typeof reference === 'object') {
        if (!isNaN(reference.index)) {
          // >> reference = objet de donnees renvoyes par le widget a sa creation
          d = Data.convertlist[reference.index];
        } else if (
          typeof reference.tagName === 'string' &&
          String(reference.tagName).toLowerCase() == 'select' &&
          reference.getAttribute('data-selectconverted')
        ) {
          if (!isNaN(Data.reference[reference.id])) {
            // >> reference = balise HTML du selecteur original
            d = Data.convertlist[Data.reference[reference.id]];
          }
        }
      } else if (!isNaN(reference)) {
        // >> reference = index de convertion du composant
        d = Data.convertlist[reference];
      } else if (typeof reference === 'string') {
        // >> reference = reference (ID) du composant
        if (!isNaN(Data.reference[reference])) {
          d = Data.convertlist[Data.reference[reference]];
        }
      }
      // Validation de l'objet obtenu
      if (d != null) {
        if (!isNaN(d.index)) {
          var t = null;
          // Recherche de la valeur demandee dans la liste des options
          var i = d.options.length - 1;
          for (i = i; i >= 0; i--) {
            if (selectedvalue == d.options[i].value) {
              t = i;
              break;
            }
          }
          if (t != null) {
            executed = true;
            // Suppression de la selection si le selecteur est reinitialise sur le placeholder
            if (d.options[t].value == 'placeholder') {
              // Nettoyage des selections
              d.original.selectedIndex = -1;
              if (!document.body.getAttribute('data-ismobile')) {
                i = d.options.length - 1;
                for (i = i; i >= 0; i--) {
                  d.options[i].convert.button.removeAttribute('data-selected');
                  d.options[i].convert.button.removeAttribute('aria-selected');
                }
              }
              // Affichage du texte
              d.button.tag.setAttribute('data-placeholder', true);
              if (d.usetextcustom) {
                d.button.text.value = d.options[t].textcustom;
                d.button.tag.setAttribute('title', d.options[t].text);
              } else {
                d.button.text.value = d.options[t].text;
              }
              // Mise a jour de la largeur du champ visible
              d.button.size.innerHTML = d.button.text.value;
              d.button.text.style.width = d.button.size.offsetWidth + 5 + 'px';
              d.button.size.removeAttribute('style');
              d.button.size.innerHTML = '';
              // Selection de l'option trouvee
            } else {
              // Selection du l'option
              d.original.selectedIndex = i;
              select(d.original, d.index, autoexecute);
            }
          } else finalmessage = "not recognized 'selection' value";
        } else {
          d = null;
          finalmessage = 'not recognized select tag';
        }
      } else finalmessage = 'not recognized select tag';
    } else if (typeof selectedvalue !== 'string')
      finalmessage = "invalid 'selection' value";
    // Envoi du resultat de la demande
    return {
      executed: executed,
      data: d,
      message: executed ? '' : finalmessage,
    };
  }
  // Fonction publique a appeler afin de selectionner une valeur specifique dans le selecteur
  function reset(reference, params) {
    // Definition des arguments
    // 	> reference 					// [NODE/STRING/NUMBER/OBJECT]	: Reference du selecteur converti a manipuler
    //																		> NODE: 	identification via la balise du selecteur converti
    //																		> OBJECT: 	identification via l'objet de donnees issu de la convertion du selecteur
    //																		> NUMBER: 	identification via l'index de convertion renvoye par la fonction "convert"
    //																		> STRING: 	identification via l'id du selecteur original converti
    // 	> params						// [OBJECT]		(optional)		: Liste de parametres a mettre a jour
    //																		> la definition de l'objet doit etre identique a l'objet de donnees passe en parametre lors de la convertion
    // Variable a renvoyer apres traitement de la demande
    var executed = false;
    var finalmessage = 'not recognized select tag';
    var d = null;
    // Verification de la selection
    if (reference != null) {
      // Identification de l'objet de donnees
      if (typeof reference === 'object') {
        if (!isNaN(reference.index)) {
          // >> reference = objet de donnees renvoyes par le widget a sa creation
          d = Data.convertlist[reference.index];
        } else if (
          typeof reference.tagName === 'string' &&
          String(reference.tagName).toLowerCase() == 'select'
        ) {
          if (
            reference.getAttribute('data-selectconverted') &&
            !isNaN(Data.reference[reference.id])
          ) {
            // >> reference = balise HTML du selecteur original
            d = Data.convertlist[Data.reference[reference]];
          } else if (!reference.getAttribute('data-selectconverted')) {
            // >> reference = balise HTML du selecteur original non converties
            d = false;
          }
        }
      } else if (!isNaN(reference)) {
        // >> reference = index de convertion du composant
        d = Data.convertlist[reference];
      } else if (typeof reference === 'string') {
        // >> reference = reference (ID) du composant
        if (!isNaN(Data.reference[reference])) {
          d = Data.convertlist[Data.reference[reference]];
        }
      }
      if (d === false) {
        // Selecteur non converti -> Lancement de la convertion
        return convert(reference, params);
      }
      if (d != null) {
        if (!isNaN(d.index)) {
          executed = true;
          // Mise a jour des parametres de personnalisation du composant si demande
          if (typeof params === 'object') updateparams(d, params, true);
          // Modification des balises du selecteur
          var o;
          var m;
          var g;
          var h;
          var i;
          var b;
          var t;
          var l;
          // Obtention de la liste des nouvelles options
          o = d.original.getElementsByTagName('option');
          m = o.length;
          // Reinitialisation des references
          g = { original: null };
          d.options = [];
          d.viewoptions = [];
          d.availableoptions = [];
          d.placeholder = null;
          // Prise en charge des nouvelles options
          if (document.body.getAttribute('data-ismobile')) {
            for (i = 0; i < m; i++) {
              // Sauvegarde des references
              d.options.push({
                original: o[i],
                convert: { button: null, text: null },
                text: clean(o[i].innerHTML),
                textcustom: clean(o[i].getAttribute('data-textcustom')),
                value: o[i].value,
                index: i,
              });
              d.viewoptions.push(d.options.length - 1);
              if (!o[i].getAttribute('disabled'))
                d.availableoptions.push(d.options.length - 1);
            }
            // Verificiation du forcage du placeholder
            if (d.forceplaceholder && d.options[0].value == 'placeholder') {
              d.original.selectedIndex = 0;
            }
          } else {
            // Suppression des balises
            i = d.dropdownlist.children.length - 1;
            for (i = i; i >= 0; i--) {
              d.dropdownlist.removeChild(d.dropdownlist.children[i]);
            }
            // Integration des balises
            for (i = 0; i < m; i++) {
              // Creation du bouton
              b = document.createElement('span');
              b.classList.add('epjs_option');
              if (o[i].getAttribute('disabled'))
                b.setAttribute('data-disabled', true);
              if (o[i].getAttribute('class'))
                b.classList.add(o[i].getAttribute('class'));
              b.setAttribute('data-type', 'option');
              b.setAttribute('data-index', i);
              t = document.createElement('span');
              t.classList.add('epjs_name');
              if (o[i].getAttribute('data-additionaltext')) {
                l = document.createElement('span');
                l.classList.add('epjs_additionaltext');
                l.appendChild(
                  document.createTextNode(
                    o[i].getAttribute('data-additionaltext')
                  )
                );
                t.appendChild(l);
              }
              l = document.createElement('span');
              l.classList.add('epjs_text');
              l.appendChild(document.createTextNode(clean(o[i].innerHTML)));
              t.appendChild(l);
              b.appendChild(t);
              t = document.createElement('span');
              t.classList.add('epjs_icon');
              t.appendChild(document.createTextNode(' '));
              b.appendChild(t);
              // Sauvegarde des references
              d.options.push({
                original: o[i],
                convert: { button: b, text: t },
                text: clean(o[i].innerHTML),
                textcustom: clean(o[i].getAttribute('data-textcustom')),
                value: o[i].value,
                index: i,
              });
              // Creation de la balise conteneur
              t = document.createElement('li');
              t.classList.add('epjs_item');
              t.setAttribute('role', 'option');
              t.setAttribute('item', d.viewoptions.length);
              t.setAttribute('tabindex', '-1');
              if (o[i].getAttribute('title'))
                t.setAttribute('title', o[i].getAttribute('title'));
              t.appendChild(b);
              if (o[i].value.toLowerCase() != 'placeholder') {
                // Encodage de la balise dans la liste
                d.dropdownlist.appendChild(t);
                // Indexation des options valides
                d.viewoptions.push(d.options.length - 1);
                if (!o[i].getAttribute('disabled'))
                  d.availableoptions.push(d.options.length - 1);
              } else {
                // Ajout de la classe pour la non prise en compte de la hauteur
                t.classList.add('epjs_placeholder');
                // Sauvegarde de la reference
                d.placeholder = t;
              }
              // Traitement visuel des "optgroup"
              if (o[i].parentNode.tagName.toLowerCase() == 'optgroup') {
                // Identification du lien de second niveau
                t.classList.add('epjs_subitem');
                // Creation de la liste de second niveau si necessaire
                if (o[i].parentNode != g.original) {
                  // Creation de la liste
                  g = {
                    original: o[i].parentNode,
                    tag: document.createElement('ul'),
                    title: null,
                  };
                  g.tag.classList.add('epjs_group');
                  b = document.createElement('li');
                  b.classList.add('epjs_item');
                  b.appendChild(g.tag);
                  d.dropdownlist.insertBefore(b, t);
                  // Ajout du titre
                  if (
                    o[i].parentNode.getAttribute('data-viewlabel') != 'false'
                  ) {
                    g.title = document.createElement('div');
                    g.title.classList.add('epjs_grouptitle');
                    b.insertBefore(g.title, g.tag);
                    h = document.createElement('span');
                    h.classList.add('epjs_name');
                    h.appendChild(
                      document.createTextNode(
                        o[i].parentNode.getAttribute('label')
                      )
                    );
                    g.title.appendChild(h);
                    h = document.createElement('span');
                    h.classList.add('epjs_icon');
                    h.appendChild(document.createTextNode(' '));
                    g.title.appendChild(h);
                  }
                }
                // Deplacement du lien dans la liste
                g.tag.appendChild(t);
              }
            }
            // Verificiation du forcage du placeholder
            if (d.forceplaceholder && d.options[0].value == 'placeholder') {
              d.original.selectedIndex = -1;
            }
            // Detection de la selection
            if (d.original.selectedIndex >= 0) {
              d.options[d.original.selectedIndex].convert.button.setAttribute(
                'data-selected',
                true
              );
              d.options[d.original.selectedIndex].convert.button.setAttribute(
                'aria-selected',
                true
              );
            } else if (d.options[0].value == 'placeholder') {
              d.original.selectedIndex = 0;
              d.options[d.original.selectedIndex].convert.button.setAttribute(
                'data-selected',
                true
              );
              d.options[d.original.selectedIndex].convert.button.setAttribute(
                'aria-selected',
                true
              );
            }
            // Mise a jour de la largeur du selecteur
            g = d.index;
            if (d.callback.updatefield != null) updatelist(null, g);
            calcul(d, null, false);
            // Ajout de la classe CSS d'identification
            l = d.dropdownlist.getElementsByTagName('*');
            i = l.length - 1;
            for (i = i; i >= 0; i--) {
              l[i].classList.add(d.reference);
            }
            // Ajout de l'action de selection des boutons
            for (i = 0; i < m; i++) {
              // Ajout de l'evenement
              d.options[i].convert.button.addEventListener('mouseup', function(
                e
              ) {
                return select(this, g);
              });
              d.options[i].convert.button.addEventListener('keydown', function(
                e
              ) {
                return keyboard(e, g);
              });
            }
          }
          // Verificiation du forcage du placeholder
          if (d.forceplaceholder && d.options[0].value == 'placeholder') {
            d.original.selectedIndex = -1;
          }
          // Detection de la selection
          if (d.original.selectedIndex >= 0) {
            d.options[d.original.selectedIndex].convert.button.setAttribute(
              'data-selected',
              true
            );
            d.options[d.original.selectedIndex].convert.button.setAttribute(
              'aria-selected',
              true
            );
          } else if (d.options[0].value == 'placeholder') {
            d.original.selectedIndex = 0;
            d.options[d.original.selectedIndex].convert.button.setAttribute(
              'data-selected',
              true
            );
            d.options[d.original.selectedIndex].convert.button.setAttribute(
              'aria-selected',
              true
            );
          }
        } else d = null;
        // Envoi du resultat de la demande
        return {
          executed: executed,
          data: d,
          message: executed ? '' : finalmessage,
        };
      }
    } else
      return {
        executed: executed,
        data: d,
        message: executed ? '' : finalmessage,
      };
  }
  // Fonction calculant les dimensions du selecteur (largeur et hauteur)
  function calcul(data, callback, adjustheight) {
    var t;
    var b;
    var m;
    var l;
    var h;
    var s;
    // Verification de la presence d'un placeholder (ajout pour le calcul)
    if (data.placeholder != null) {
      data.dropdownlist.appendChild(data.placeholder);
      s = data.placeholder.getElementsByClassName('epjs_option')[0];
      s.removeAttribute('data-disabled');
    }
    // Sauvegarde de la hauteur initiale de la page
    h = document.body.clientHeight;
    // Ouverture du menu hors de la zone visible
    data.button.tag.style.width = '';
    data.animatedopen.style.width = '';
    data.dropdown.style.position = 'absolute';
    data.dropdown.style.transform = 'translate(-9000px, 0)';
    data.animatedopen.style.width = '2000px';
    data.animatedopen.style.minwidth = '10px';
    data.container.setAttribute('data-open', 'true');
    // Recuperation de la longueur du bouton le plus long
    l = 0;
    m = data.options.length;
    for (b = 0; b < m; b++) {
      t = data.options[b].convert.button;
      t.style.width = 'auto';
      l = Math.max(l, t.offsetWidth);
      t.style.width = '';
    }
    // Recuperation de la longueur du champ texte
    data.button.size.innerHTML = data.button.text.value;
    setTimeout(function() {
      data.button.text.style.width = data.button.size.offsetWidth + 5 + 'px';
      l = Math.max(l, data.button.size.offsetWidth + 5);
      data.button.size.removeAttribute('style');
      data.button.size.innerHTML = '';
      // Assignation de la valeur obtenue
      data.button.tag.style.minWidth = l + 'px';
      data.dropdown.style.minWidth = l + 'px';
      data.animatedopen.style.width = l + 'px';
      // Prise en compte des marges laterales
      t = data.button.tag.offsetWidth - data.button.text.offsetWidth;
      l += t;
      // Assignation de la valeur obtenue
      data.button.tag.style.width = l + 'px';
      data.dropdown.style.width = l + 'px';
      data.animatedopen.style.minwidth = '';
      data.animatedopen.style.width = 'auto';
      // Verification de la hauteur de la page par rapport a la longueur de la liste
      if (adjustheight !== false) height(data, true);
      // Fermeture du menu
      data.container.removeAttribute('data-open');
      data.dropdown.style.position = '';
      data.dropdown.style.transform = '';
    }, 1);
    // Verification de la presence d'un placeholder (suppression apres le calcul)
    if (data.placeholder != null) {
      data.dropdownlist.removeChild(data.placeholder);
      s.setAttribute('data-disabled', true);
    }
    // Execution de la fonction de rappel passee en parametre
    if (typeof callback === 'function')
      setTimeout(function(e) {
        callback(e, data.index);
      }, 5);
  }
  function height(data, alreadyopened) {
    var h;
    var m;
    var y;
    var t;
    // Ouverture de la liste avant traitement
    if (alreadyopened !== true) {
      // Ouverture de la liste pour le calcul
      data.container.setAttribute('data-open', 'true');
      data.dropdown.style.position = 'absolute';
      data.dropdown.style.transform = 'translate(-9000px, 0)';
    }
    // Sauvegarde de la hauteur initiale de la page
    h = window.innerHeight + window.pageYOffset;
    // Recuperation de la position verticale du selecteur dans la fenetre
    y = 0;
    t = data.dropdownlist;
    while (check(t)) {
      if (getComputedStyle(t).position) {
        y +=
          getComputedStyle(t).position.toLowerCase() != 'static'
            ? t.offsetTop
            : 0;
      }
      t = t.parentNode;
    }
    // Calcul de la longueur de la liste
    m = Math.max(
      data.dropdownlist.scrollHeight,
      data.animatedopen.offsetHeight
    );
    // Verification de la hauteur disponible pour le selecteur
    if (h > y + m + 20) {
      data.dropdownlist.style.maxHeight = '100000px';
      //data.animatedopen.setAttribute('data-height', m + 'px');
    } else {
      m = h - y - 20;
      data.dropdownlist.style.maxHeight = m + 'px';
      //data.animatedopen.setAttribute('data-height', m + 'px');
    }
    // Fermeture du menu
    if (alreadyopened !== true) {
      data.container.removeAttribute('data-open');
      data.dropdown.style.position = '';
      data.dropdown.style.transform = '';
    }
  }

  // - GESTION DES ACTIONS SUR LES ELEMENTS DU MENU   - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // ACTION DU MENU : Selection d'une option (commun entre version mobile et desktop)
  function select(element, index, autoexecute) {
    if (
      !isNaN(index) &&
      !element.getAttribute('data-selected') &&
      !element.getAttribute('data-disabled')
    ) {
      var i;
      // Identification de l'objet de donnees
      var d = Data.convertlist[index];
      // Recuperation de la valeur
      if (element.getAttribute('data-type') == 'option') {
        // Selection appelee depuis la liste JS
        if (d.original.selectedIndex >= 0) {
          d.options[d.original.selectedIndex].convert.button.removeAttribute(
            'data-selected'
          );
          d.options[d.original.selectedIndex].convert.button.removeAttribute(
            'aria-selected'
          );
        }
        i = element.getAttribute('data-index');
        d.options[i].convert.button.setAttribute('data-selected', true);
        d.options[i].convert.button.setAttribute('aria-selected', true);
        d.original.selectedIndex = i;
      } else {
        // Selection appelee depuis le selecteur original ou via la fonction "updateselection"
        i = d.original.selectedIndex;
        // Nettoyage du menu s'il existe
        if (!document.body.getAttribute('data-ismobile')) {
          if (d.original.selectedIndex >= 0) {
            // Nettoyage des styles des autres boutons
            var b = d.options.length - 1;
            for (b = b; b >= 0; b--) {
              d.options[b].convert.button.removeAttribute('data-selected');
              d.options[b].convert.button.removeAttribute('aria-selected');
            }
            // Selection du bouton
            d.options[i].convert.button.setAttribute('data-selected', true);
            d.options[i].convert.button.setAttribute('aria-selected', true);
          }
        }
      }
      // Changement de valeur dans le bouton d'ouverture
      if (d.usetextcustom) {
        d.button.text.value = d.options[i].textcustom;
        d.button.tag.setAttribute('title', d.options[i].text);
      } else {
        d.button.text.value = d.options[i].text;
      }
      d.button.tag.removeAttribute('data-placeholder');
      // Mise a jour de la largeur du champ visible
      d.button.size.innerHTML = d.button.text.value;
      setTimeout(function() {
        d.button.text.style.width = d.button.size.offsetWidth + 5 + 'px';
        d.button.size.removeAttribute('style');
        d.button.size.innerHTML = '';
      }, 1);
      // Execution du formulaire si demande
      if (autoexecute !== false) {
        if (d.callback.selection(d) && d.form != null) {
          if (d.autoexecute || autoexecute === true) {
            if (d.callback.beforesubmit(d)) {
              d.form.submit();
              d.callback.aftersubmit(d);
            }
          }
        }
      }
    }
    // Fermeture du menu si on n'est pas en mode mobile
    if (element.getAttribute('data-type') == 'option') display(index, true);
  }
  // ACTION DU MENU : Ajout de l'effet de survol sur le bouton visuel en mode "mobile"
  function state(e, index, buttoncall) {
    if (!isNaN(index)) {
      // Identification de l'objet de donnees
      var d = Data.convertlist[index];
      // Identification de l'action a executer
      e.type.toLowerCase() == 'focus'
        ? d.button.tag.setAttribute('data-focus', true)
        : d.button.tag.removeAttribute('data-focus');
      // Verification du blocage du curseur (affichage du curseur texte dans le bouton d'ouverture du selecteur)
      if (!buttoncall) {
        if (
          !document.body.getAttribute('data-ismobile') &&
          e.type.toLowerCase() == 'focus' &&
          !d.editable
        )
          d.button.text.select();
      }
    }
  }
  // ACTION DU MENU : Navigation clavier sur le menu "desktop"
  function keyboard(e, index) {
    if (!isNaN(index)) {
      var i;
      var t;
      // Identification de l'objet de donnees
      var d = Data.convertlist[index];
      // Verification de la touche choisie
      var k = null;
      if (window.event) k = event.keyCode;
      else if (e) k = e.which ? e.which : 0;
      // Traitement de la demande si la touche "alt" est enfoncee
      if (!d.container.getAttribute('data-open') && (k == 38 || k == 56)) {
        // - - - - - - - - -> fermeture de la liste (touche "8" ou "arrow top" + touche "alt")
        k = e.altKey ? 13 : -1;
      } else if (
        !d.container.getAttribute('data-open') &&
        (k == 40 || k == 50)
      ) {
        // - - - - -> ouverture de la liste (touche "2" ou "arrow bottom" + touche "alt")
        k = e.altKey ? 40 : -1;
      }
      // Analyse de l'action demandee
      if (k == 38 || k == 40 || k == 50 || k == 56) {
        // - - - - - - - - - - - - - - - - - - -> deplacement de la selection (touche "2" ou "8" ou "arrow bottom" ou "arrow top")
        // Rafraichissement de la liste d'options accessibles
        d.availableoptions = [];
        t = d.viewoptions.length;
        for (i = 0; i < t; i++) {
          if (!d.options[d.viewoptions[i]].original.getAttribute('disabled')) {
            d.availableoptions.push(d.viewoptions[i]);
          }
        }
        // Lancement de la navigation dans les options disponibles
        t = true;
        if (d.availableoptions.length == 0) t = false;
        else if (
          d.availableoptions.length == 1 &&
          d.options[d.availableoptions[0]].value == 'placeholder'
        )
          t = false;
        if (t) {
          // Verification de l'autorisation d'affichage de la liste
          if (!d.openbykeyboard) {
            d.container.setAttribute('data-hiddenlist', true);
            d.animatedopen.setAttribute('data-height', 10);
          }
          // Ouverture du menu
          if (!d.container.getAttribute('data-open')) display(index, null);
          // Recherche du bouton ayant actuellement le focus
          t = -1;
          i = d.availableoptions.length - 1;
          for (i = i; i >= 0; i--) {
            if (
              d.options[d.availableoptions[i]].convert.button.getAttribute(
                'data-focus'
              )
            ) {
              t = i;
              break;
            }
          }
          // Recherche du sens du deplacement
          i = k == 38 || k == 56 ? -1 : 1;
          // Suppression de l'effet "focus"
          if (t > -1)
            d.options[d.availableoptions[t]].convert.button.removeAttribute(
              'data-focus'
            );
          else t = d.original.selectedIndex - i;
          // Recherche du bouton suivant pour l'assignation du survol
          t += i;
          t = Math.min(d.availableoptions.length - 1, Math.max(t, 0));
          t = d.availableoptions[t];
          d.options[t].convert.button.setAttribute('data-focus', true);
          // Changement de valeur dans le bouton d'ouverture
          if (!d.editable) {
            if (d.usetextcustom) {
              d.button.text.value = d.options[t].textcustom;
              d.button.tag.setAttribute('title', d.options[t].text);
            } else {
              d.button.text.value = d.options[t].text;
            }
            if (d.options[t].value != 'placeholder')
              d.button.tag.removeAttribute('data-placeholder');
          }
          // Mise a jour de la position de la liste des valeurs
          if (d.options[t].value != 'placeholder') {
            t = d.options[t].convert.button.parentNode;
            i = t.offsetTop;
            k = i + t.offsetHeight;
            if (k > d.dropdownlist.offsetHeight + d.dropdownlist.scrollTop) {
              d.dropdownlist.scrollTop = k - d.dropdownlist.offsetHeight;
            } else if (i < d.dropdownlist.scrollTop) {
              d.dropdownlist.scrollTop = i;
            }
          }
        }
        // Blocage de l'action par defaut
        return false;
      }
      if (k == 33 || k == 34) {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - -> deplacement de la liste (touche "Page UP" ou "Page Down")
        // Recherche du bouton ayant actuellement le focus
        t = -1;
        i = d.options.length - 1;
        for (i = i; i >= 0; i--) {
          if (d.options[i].convert.button.getAttribute('data-focus')) {
            t = i;
            break;
          }
        }
        // Identification du lien
        if (t < 0) {
          i = { top: 0, bottom: d.dropdownlist.scrollHeight };
        } else if (d.options[t].value == 'placeholder') {
          i = { top: 0, bottom: d.dropdownlist.scrollHeight };
        } else {
          t = d.options[t].convert.button.parentNode;
          i = {};
          i.bottom = t.offsetTop;
          i.top = i.bottom + t.offsetHeight - d.dropdownlist.offsetHeight;
        }
        // Mise a jour de la position de la liste des valeurs
        if (k == 33) {
          d.dropdownlist.scrollTop = i.top;
        } else {
          d.dropdownlist.scrollTop = i.bottom;
        }
        // Blocage de l'action par defaut
        return false;
      }
      if (k == 9 || k == 27) {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - -> fermeture sans selection (touche "tab" ou "escape")
        t = d.options[d.original.selectedIndex];
        t =
          d.original.selectedIndex > -1 &&
          typeof d.options[d.original.selectedIndex] === 'object'
            ? t
            : { value: '' };
        // Reinitialisation de la valeur affichee
        if (d.editable) {
          d.button.text.value = '';
        } else if (d.usetextcustom) {
          d.button.text.value = d.options[d.original.selectedIndex].textcustom;
          d.button.tag.setAttribute(
            'title',
            d.options[d.original.selectedIndex].text
          );
        } else {
          d.button.text.value = d.options[d.original.selectedIndex].text;
        }
        if (t.value == 'placeholder')
          d.button.tag.setAttribute('data-placeholder', true);
        // Fermeture de la liste
        display(index, true, true);
        return true;
      }
      if ((k == 32 && !d.editable) || k == 13) {
        //  - - - - - - - - - - - - - - - - - - -> selection d'une option (touche "space" [si non editable] ou "enter")
        // Verification de l'etat du menu
        if (d.container.getAttribute('data-open')) {
          // Selection de l'option
          i = d.options.length - 1;
          for (i = i; i >= 0; i--) {
            if (d.options[i].convert.button.getAttribute('data-focus')) {
              select(d.options[i].convert.button, index);
              break;
            }
          }
        } else {
          // Ouverture du menu
          display(index, null);
        }
        // Blocage de l'action par defaut
        return false;
      }
      if (k >= 65 && k <= 90) {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - -> selection d'une option dans la liste (mode non editable)
        if (!d.editable) {
          // Recherche de la premiere option dont le libelle correspond au texte tape
          k = String.fromCharCode(k).toLowerCase();
          t = [];
          t[0] = -1;
          t[1] = d.options.length;
          if (d.usetextcustom) {
            for (i = 0; i < t[1]; i++) {
              if (d.options[i].textcustom.toLowerCase().indexOf(k) == 0) {
                t[0] = i;
                break;
              }
            }
          } else {
            for (i = 0; i < t[1]; i++) {
              if (d.options[i].text.toLowerCase().indexOf(k) == 0) {
                t[0] = i;
                break;
              }
            }
          }
          // Selection de la premiere option correspondante a la touche ou fermeture du menu
          if (
            t[0] >= 0 &&
            !d.options[t[0]].convert.button.getAttribute('data-disabled')
          ) {
            // Nettoyage de la selection
            for (i = 0; i < t[1]; i++) {
              d.options[i].convert.button.removeAttribute('data-focus');
            }
            // Selection de l'option
            t = t[0];
            d.options[t].convert.button.setAttribute('data-focus', true);
            // Changement de valeur dans le bouton d'ouverture
            if (d.usetextcustom) {
              d.button.text.value = d.options[t].textcustom;
              d.button.tag.setAttribute('title', d.options[t].text);
            } else {
              d.button.text.value = d.options[t].text;
            }
            if (d.options[t].value != 'placeholder')
              d.button.tag.removeAttribute('data-placeholder');
            // Ouverture du menu et deplacement du scroll
            if (!d.container.getAttribute('data-open')) {
              display(index, null);
              d.dropdownlist.scrollTop =
                d.options[t].convert.button.parentNode.offsetTop;
            } else {
              t = d.options[t].convert.button.parentNode;
              i = t.offsetTop;
              k = i + t.offsetHeight;
              if (k > d.dropdownlist.offsetHeight + d.dropdownlist.scrollTop) {
                d.dropdownlist.scrollTop = k - d.dropdownlist.offsetHeight;
              } else if (i < d.dropdownlist.scrollTop) {
                d.dropdownlist.scrollTop = i;
              }
            }
          } else {
            // Fermeture du menu
            display(index, true);
          }
        } else {
          d.button.tag.removeAttribute('data-placeholder');
        }
        return true;
      }
      if (k == 8 && d.editable) {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - -> mise a jour de la liste a la suppression d'un element de la liste (touche "backspace" si editable)
        if (d.button.text.value.length == 0) {
          t = d.options[d.original.selectedIndex];
          t =
            d.original.selectedIndex > -1 &&
            typeof d.options[d.original.selectedIndex] === 'object'
              ? t
              : { value: '' };
          // Reinitialisation de la valeur affichee
          if (d.editable) {
            d.button.text.value = '';
          } else if (d.usetextcustom) {
            d.button.text.value =
              d.options[d.original.selectedIndex].textcustom;
            d.button.tag.setAttribute(
              'title',
              d.options[d.original.selectedIndex].text
            );
          } else {
            d.button.text.value = d.options[d.original.selectedIndex].text;
          }
          if (t.value == 'placeholder')
            d.button.tag.setAttribute('data-placeholder', true);
          // Fermeture de la liste
          display(index, true, true);
        }
        return true;
      }
      return true;
    }
    return true;
  }
  // ACTION DU MENU : Mise a jour de la liste des options coherentes avec le texte encode dans le selecteur
  function updatelist(e, index) {
    if (!isNaN(index)) {
      var i;
      var m;
      // Identification de l'objet de donnees
      var d = Data.convertlist[index];
      // Verification de la touche choisie
      var k = null;
      if (window.event) k = event.keyCode;
      else if (e) k = e.which ? e.which : 0;
      // Verification qu'on n'ait pas fait de copier coller
      if (e == null) e = { type: 'none' };
      // Mise a jour de la liste via une fonction externe
      if (
        (k >= 65 && k <= 90) ||
        k == 32 ||
        (k == 42 || k == 46 || k == 8) ||
        e.type.toLowerCase() == 'paste'
      ) {
        if (d.callback.updatefield(e, d)) {
          // Mise a jour des options accessibles
          d.viewoptions = [];
          m = d.options.length;
          for (i = 0; i < m; i++) {
            // Suppression du focus
            d.options[i].convert.button.removeAttribute('data-focus');
            // Suppression de la selection
            d.options[i].convert.button.removeAttribute('data-selected');
            d.original.selectedIndex = -1;
            // Verification de la validite du lien
            if (
              !d.options[i].convert.button.getAttribute('data-disabled') &&
              d.options[i].value != 'placeholder'
            ) {
              d.viewoptions.push(i);
            }
          }
          // Mise a jour de l'ouverture ou non de la liste
          if (d.button.text.value.length == 0 && (k == 42 || k == 8)) {
            if (d.viewoptions.length == 0) {
              display(index, true);
            } else if (
              d.button.text.value.length == 0 &&
              d.viewoptions.length == 1 &&
              d.options[d.viewoptions[0]].value == 'placeholder'
            ) {
              display(index, true);
            } else if (!d.container.getAttribute('data-open'))
              display(index, null);
          } else if (d.viewoptions.length > 0) {
            if (!d.container.getAttribute('data-open')) display(index, null);
          } else if (d.viewoptions.length == 0) {
            display(index, true);
          }
          // Mise a jour de la hauteur de la liste
          d.animatedopen.style.height = d.dropdownlist.offsetHeight + 'px';
          d.animatedopen.removeAttribute('data-height');
          d.dropdownlist.scrollTop = 0;
        }
      }
    }
  }

  // - GESTION DE L'OUVERTURE ET FERMETURE DE PANNEAUX  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // OUVERTURE/FERMETURE : Changement de l'animation d'ouverture ou fermeture
  function display(index, hide, nofocus) {
    // Identification de l'objet de donnees
    var d = Data.convertlist[index];
    // Identification de l'affichage desire
    var v = hide ? false : !d.container.getAttribute('data-open');
    // Verification du contenu tape
    if (v && d.editable && d.autocomplete) {
      v = d.button.tag.getAttribute('data-validationtext');
    }
    // Affichage du contenu
    if (v) {
      // Rafraichissement de la liste d'options accessibles
      v = d.viewoptions.length - 1;
      for (v = v; v >= 0; v--) {
        d.options[d.viewoptions[v]].original.getAttribute('disabled')
          ? d.options[d.viewoptions[v]].convert.button.setAttribute(
              'data-disabled',
              true
            )
          : d.options[d.viewoptions[v]].convert.button.removeAttribute(
              'data-disabled'
            );
      }
      // Execution de l'ouverture
      if (d.callback.beforeopen == null || d.callback.beforeopen(null, d)) {
        // Assignation du focus si non contredit
        if (nofocus !== true)
          d.editable ? d.button.text.focus() : d.button.tag.focus();
        // Verification de la largeur du menu dropdown
        if (
          parseFloat(d.animatedopen.getAttribute('data-height')) == 0 ||
          d.button.tag.style.width == '0'
        ) {
          // Calcul des dimensions
          calcul(d, view);
        } else {
          height(d, false);
          // Ouverture du menu
          d.container.setAttribute('data-open', 'true');
          d.dropdownlist.scrollTop = 0;
          d.dropdownlist.setAttribute('aria-expanded', true);
          d.animatedopen.style.height = d.animatedopen.getAttribute(
            'data-height'
          );
          d.button.icontext.innerHTML = d.button.icon.getAttribute(
            'data-closelabel'
          );
        }
      }
    } else if (
      d.callback.beforeclose == null ||
      d.callback.beforeclose(null, d)
    ) {
      v = Boolean(d.container.getAttribute('data-open'));
      // Fermeture du menu
      d.container.removeAttribute('data-open');
      d.dropdownlist.setAttribute('aria-expanded', false);
      d.container.removeAttribute('data-hiddenlist');
      d.button.icontext.innerHTML = d.button.icon.getAttribute(
        'data-openlabel'
      );
      d.animatedopen.style.height = '';
      // Assignation du focus si non contredit
      if (nofocus !== true)
        d.editable ? d.button.text.focus() : d.button.tag.focus();
      // Nettoyage des selections dans les options du menu
      i = d.options.length - 1;
      for (i = i; i >= 0; i--) {
        d.options[i].convert.button.removeAttribute('data-focus');
      }
      // Suppression de la hauteur par defaut
      if (d.options.length != d.viewoptions.length)
        d.animatedopen.removeAttribute('data-height');
      // Calcul des dimensions
      if (d.button.tag.style.width == '0' || d.button.tag.style.width == '0px')
        calcul(d, null, false);
    }
    return true;
  }
  function view(e, index) {
    if (!isNaN(index)) {
      return display(index, false);
    }
  }
  function clickout(e, index) {
    if (!isNaN(index) && check(e.target)) {
      i = Data.convertlist[index];
      if (e.target.classList != null) {
        if (!e.target.classList.contains(i.reference))
          return display(index, true, true);
      } else if (
        e.target.className != null &&
        typeof e.target.className === 'string'
      ) {
        if (!e.target.className.match(i.reference))
          return display(index, true, true);
      }
    }
  }
  // OUVERTURE/FERMETURE : Rafraichissement de la taille du selecteur lors du redimensionnement de la fenetre
  function resize(index) {
    if (!isNaN(index)) {
      display(index, true, true);
    }
  }
  // OUVERTURE/FERMETURE : Fermeture generale de tous les selecteurs
  function closecomponents(exceptions) {
    var i;
    var a;
    var e;
    var l = Data.convertlist;
    // Verification de la validite des exceptions
    if (exceptions != null) {
      if (typeof exceptions === 'object') {
        if (exceptions.length > 0) {
          // Duplication de la liste
          a = [];
          e = l.length;
          for (i = 0; i < e; i++) {
            a.push(l[i]);
          }
          l = a;
          // Analyse des exceptions transmises
          e = null;
          a = [];
          i = exceptions.length - 1;
          for (i = i; i >= 0; i--) {
            e = exceptions[i];
            if (typeof e === 'object') {
              // >> exception = objet de donnees renvoyes par le widget a sa creation
              if (!isNaN(e.index)) {
                if (Data.convertlist[e.index]) {
                  l[e.index] = null;
                }
              } else if (
                typeof e.tagName === 'string' &&
                String(e.tagName).toLowerCase() == 'select' &&
                e.getAttribute('data-selectconverted')
              ) {
                if (!isNaN(Data.reference[e.id])) {
                  // >> exception = balise HTML du selecteur original
                  l[Data.reference[e]] = null;
                }
              }
            } else if (!isNaN(e)) {
              // >> exception = index de convertion du composant
              if (Data.convertlist[e]) {
                l[e] = null;
              }
            } else if (typeof e === 'string') {
              // >> exception = reference (ID) du composant
              if (!isNaN(Data.reference[e])) {
                l[Data.reference[e]] = null;
              }
            }
          }
        }
      }
    }
    // Fermeture des selecteurs demandes
    i = l.length - 1;
    for (i = i; i >= 0; i--) {
      if (l[i] != null) {
        display(l[i], true, true);
      }
    }
  }

  // - GESTION DES FONCTIONS PUBLIQUES  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  return {
    // Fonction de convertion du selecteur natif en composant JS
    convert: askconvertion, // Parametres de la fonction : Select.convert(reference, params)
    // 	> reference 					// [STRING/NODE] 					(mandatory)	: Reference du selecteur a convertir.
    //																						> STRING: 	id du selecteur
    //																						> NODE: 	balise HTML du selecteur
    // 	> params 						// [OBJECT] 						(optional) 	: Objet de personnalisation du selecteur
    // 	  > params.autoexecute 			// [BOOLEAN]  (default value: false)			: Definit si le formulaire doit etre execute au changement de valeur du selecteur
    // 	  > params.forceplaceholder		// [BOOLEAN]  (default value: false)			: Definit si le selecteur doit etre parametre sur le placeholder
    // 	  > params.editable 			// [BOOLEAN]  (default value: false)			: Definit si le champ d'ouverture du selecteur peut etre editable et ayant un systeme d'autocompletion via la liste
    // 	  > params.usetextcustom		// [BOOLEAN]  (default value: false)			: Definit si la valeur affichee dans le selecteur converti est la valeur de la balise option ou le libelle
    // 	  > params.openbykeyboard		// [BOOLEAN]  (default value: true)				: Definit si le selecteur doit se deployer lors de la navigation clavier
    // 	  > params.viewdisabled			// [BOOLEAN]  (default value: false)			: Definit si le selecteur doit afficher ou non les options non accessible
    // 	  > params.cb_afterconvert		// [FUNCTION] (need a return value = true)		: Fonction appelee apres la convertion du selecteur
    // 	  > params.cb_beforeopen		// [FUNCTION] (need a return value = true)		: Fonction appelee avant l'ouverture  de la liste du selecteur
    // 	  > params.cb_afteropen			// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'ouverture  de la liste du selecteur
    // 	  > params.cb_beforeclose		// [FUNCTION] (need a return value = true)		: Fonction appelee avant la fermeture de la liste du selecteur
    // 	  > params.cb_afterclose		// [FUNCTION] (need a return value = true)		: Fonction appelee apres la fermeture de la liste du selecteur
    // 	  > params.cb_beforesubmit		// [FUNCTION] (need a return value = true)		: Fonction appelee avant l'execution du formulaire (si mode "autoexecute")
    // 	  > params.cb_aftersubmit		// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'execution du formulaire (si mode "autoexecute")
    // 	  > params.cb_selection			// [FUNCTION] (need a return value = true)		: Fonction appelee lors de la selection du selecteur
    // 	  > params.cb_updatefield		// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'edition du champ texte (si mode "editable")
    // Reponse de la fonction : Select.convert() = result
    // 	> result.converted	 			// [BOOLEAN]									: Defini si la convertion du selecteur a reussi ou non
    // 	> result.data	 				// [OBJECT]										: Objet de donnees contenant toutes les informations du selecteur converti (vaut "null" si la convertion a echoue)

    // Fonction de mise a jour des parametres definis dans un selecteur deja converti
    updateparams: updatedata, // Parametres de la fonction : Select.updateparams(reference, params)
    // 	> reference 					// [STRING/NODE/NUMBER/OBJECT]		(mandatory) : Reference du selecteur converti a manipuler
    //																						> STRING: 	identification via l'id du selecteur original converti
    //																						> NODE: 	balise HTML du selecteur original converti
    //																						> NUMBER: 	identification via l'index de convertion renvoye par la fonction "convert"
    //																						> OBJECT: 	identification via l'objet de donnees issu de la convertion du selecteur (result.data)
    // 	> params 						// [OBJECT] 						(mandatory) : Objet de personnalisation du selecteur contenant les nouvelles valeurs a remplacer
    // 	  > params.autoexecute 			// [BOOLEAN]  (default value: false)			: Definit si le formulaire doit etre execute au changement de valeur du selecteur
    // 	  > params.usetextcustom		// [BOOLEAN]  (default value: false)			: Definit si la valeur affichee dans le selecteur converti est la valeur de la balise option ou le libelle
    // 	  > params.openbykeyboard		// [BOOLEAN]  (default value: true)				: Definit si le selecteur doit se deployer lors de la navigation clavier
    // 	  > params.viewdisabled			// [BOOLEAN]  (default value: false)			: Definit si le selecteur doit afficher ou non les options non accessible
    // 	  > params.cb_beforeopen		// [FUNCTION] (need a return value = true)		: Fonction appelee avant l'ouverture  de la liste du selecteur
    // 	  > params.cb_afteropen			// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'ouverture  de la liste du selecteur
    // 	  > params.cb_beforeclose		// [FUNCTION] (need a return value = true)		: Fonction appelee avant la fermeture de la liste du selecteur
    // 	  > params.cb_afterclose		// [FUNCTION] (need a return value = true)		: Fonction appelee apres la fermeture de la liste du selecteur
    // 	  > params.cb_beforesubmit		// [FUNCTION] (need a return value = true)		: Fonction appelee avant l'execution du formulaire (si mode "autoexecute")
    // 	  > params.cb_aftersubmit		// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'execution du formulaire (si mode "autoexecute")
    // 	  > params.cb_selection			// [FUNCTION] (need a return value = true)		: Fonction appelee lors de la selection du selecteur
    // 	  > params.cb_updatefield		// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'edition du champ texte (si mode "editable")
    // Reponse de la fonction : Select.updateparams() = result
    // 	> result.executed	 			// [BOOLEAN]									: Defini si la demande a reussi ou non
    // 	> result.data	 				// [OBJECT]										: Objet de donnees contenant toutes les informations du selecteur converti
    // 	> result.message				// [STRING]										: Message d'erreur

    // Fonction de mise a jour de la selection du composant
    updateselection: updateselection, // Parametres de la fonction : Select.updateselection(reference, selectedvalue, autoexecute)
    // 	> reference 					// [STRING/NODE/NUMBER/OBJECT]		(mandatory) : Reference du selecteur converti a manipuler
    //																						> STRING: 	identification via l'id du selecteur original converti
    //																						> NODE: 	balise HTML du selecteur original converti
    //																						> NUMBER: 	identification via l'index de convertion renvoye par la fonction "convert"
    //																						> OBJECT: 	identification via l'objet de donnees issu de la convertion du selecteur (result.data)
    // 	> selectedvalue 				// [STRING] 						(mandatory) : Reference de l'option du selecteur original a selectionner, identification de l'option concernee via sa valeur
    // 	> autoexecute					// [BOOLEAN]  (default value: true)	(optional)	: Defini si le composant doit executer les actions de selection (callback, etc) du selecteur et formulaire associe
    // Reponse de la fonction : Select.updateselection() = result
    // 	> result.converted	 			// [BOOLEAN]									: Defini si la mise a jour du selecteur a reussi ou non
    // 	> result.data	 				// [OBJECT]										: Objet de donnees contenant toutes les informations du selecteur converti
    // 	> result.message				// [STRING]										: Message d'erreur

    // Fonction de mise a jour de la largeur du composant
    resize: resize, // Parametres de la fonction : Select.resize(reference)
    // 	> reference 					// [STRING/NODE/NUMBER/OBJECT]		(mandatory) : Reference du selecteur converti a manipuler
    //																						> STRING: 	identification via l'id du selecteur original converti
    //																						> NODE: 	balise HTML du selecteur original converti
    //																						> NUMBER: 	identification via l'index de convertion renvoye par la fonction "convert"
    //																						> OBJECT: 	identification via l'objet de donnees issu de la convertion du selecteur (result.data)

    // Fonction de mise a jour de la largeur du composant
    reset: reset, // Parametres de la fonction : Select.reset(reference, params)
    // 	> reference 					// [STRING/NODE/NUMBER/OBJECT]		(mandatory) : Reference du selecteur converti a manipuler
    //																						> STRING: 	identification via l'id du selecteur original converti
    //																						> NODE: 	balise HTML du selecteur original converti
    //																						> NUMBER: 	identification via l'index de convertion renvoye par la fonction "convert"
    //																						> OBJECT: 	identification via l'objet de donnees issu de la convertion du selecteur (result.data)
    // 	> params 						// [OBJECT] 						(optional) 	: Objet de personnalisation du selecteur (identique a l'objet de donnees utilise pour la fonction de convertion)
    // 	  > params.autoexecute 			// [BOOLEAN]  (default value: false)			: Definit si le formulaire doit etre execute au changement de valeur du selecteur
    // 	  > params.usetextcustom		// [BOOLEAN]  (default value: false)			: Definit si la valeur affichee dans le selecteur converti est la valeur de la balise option ou le libelle
    // 	  > params.openbykeyboard		// [BOOLEAN]  (default value: true)				: Definit si le selecteur doit se deployer lors de la navigation clavier
    // 	  > params.viewdisabled			// [BOOLEAN]  (default value: false)			: Definit si le selecteur doit afficher ou non les options non accessible
    // 	  > params.cb_beforeopen		// [FUNCTION] (need a return value = true)		: Fonction appelee avant l'ouverture  de la liste du selecteur
    // 	  > params.cb_afteropen			// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'ouverture  de la liste du selecteur
    // 	  > params.cb_beforeclose		// [FUNCTION] (need a return value = true)		: Fonction appelee avant la fermeture de la liste du selecteur
    // 	  > params.cb_afterclose		// [FUNCTION] (need a return value = true)		: Fonction appelee apres la fermeture de la liste du selecteur
    // 	  > params.cb_beforesubmit		// [FUNCTION] (need a return value = true)		: Fonction appelee avant l'execution du formulaire (si mode "autoexecute")
    // 	  > params.cb_aftersubmit		// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'execution du formulaire (si mode "autoexecute")
    // 	  > params.cb_selection			// [FUNCTION] (need a return value = true)		: Fonction appelee lors de la selection du selecteur
    // 	  > params.cb_updatefield		// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'edition du champ texte (si mode "editable")
    // Reponse de la fonction : Select.updateparams() = result
    // 	> result.executed	 			// [BOOLEAN]									: Defini si la mise a jour du selecteur a reussi ou non
    // 	> result.data	 				// [OBJECT]										: Objet de donnees contenant toutes les informations du selecteur converti
    // 	> result.message				// [STRING]										: Message d'erreur

    // Fonction de fermeture globale des selecteurs de la page
    closeall: closecomponents, // Parametres de la fonction : Select.closeall(exceptions)
    // 	> exceptions 					// [ARRAY]							(optional) 	: Liste de references de composant a ne pas fermer
    // 	  > exceptions[x]				// [STRING/NODE/NUMBER/OBJECT] 					: Reference du selecteur converti a manipuler
    //																						> STRING: 	identification via l'id du selecteur original converti
    //																						> NODE: 	balise HTML du selecteur original converti
    //																						> NUMBER: 	identification via l'index de convertion renvoye par la fonction "convert"
    //																						> OBJECT: 	identification via l'objet de donnees issu de la convertion du selecteur (result.data)
  };
})();

/* ============================================================================================================================================================================ */
/* === GESTION DES ACTIONS ACCORDEONS (expand/collapse [+]/[-]) =============================================================================================================== */
/* ============================================================================================================================================================================ */

var Accordion = (function Accordion() {
  var Data = { convertlist: [], reference: {} };

  // - VALIDATION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // VALIDATION : controle de l'objet de donnees passe en parametre
  function check(d) {
    if (typeof d === 'object') {
      if (d != null) {
        return d.tagName != null;
      }
      return false;
    }
    return false;
  }

  // - CONVERTION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  function convert(parent, newbutton, animatedcontent, realcontent, params) {
    // Initialisation des variables
    var i;
    var m;
    var o;
    var t;
    var b;
    var l;
    var data = null;
    // Verification des balise transmises en parametre
    if (
      check(parent) &&
      check(newbutton) &&
      check(animatedcontent) &&
      check(realcontent)
    ) {
      if (!parent.getAttribute('data-accordion')) {
        // Blocage des convertions ulterieures
        parent.setAttribute('data-accordion', false);
        // Analyse de l'objet de parametre
        if (typeof params !== 'object') {
          params = {};
        } else if (params == null) {
          params = {};
        }
        // Definition de l'objet
        // 	> params.clickonicon													// [BOOLEAN] (default value: false)			: Indicateur d'ajout des actions de souris sur l'icone et non l'entierete du bouton
        // 	> params.openbtn														// [NODE] 									: Conteneur du bouton d'ouverture  [+] d'origine (utilise sans JS) a supprimer dans la version JS
        // 	> params.closebtn														// [NODE] 									: Conteneur du bouton de fermeture [-] d'origine (utilise sans JS) a supprimer dans la version JS
        // 	> params.cb_afterconvert												// [FUNCTION] (need a return value = true)	: Fonction appelee apres la convertion du bloc
        // 	> params.cb_beforeanim													// [FUNCTION] (need a return value = true)	: Fonction appelee avant l'animation d'ouverture ou la fermeture du bloc de contenu
        // 	> params.cb_afteranim													// [FUNCTION] (need a return value = true)	: Fonction appelee apres l'animation d'ouverture ou la fermeture du bloc de contenu
        // Initialisation de l'objet de donnees du widget
        data = {};
        data.id = null; // [STRING]									: Identifiant de la balise originale
        data.reference = null; // [STRING]									: Identifiant de la balise convertie
        data.index = null; // [INT]									: Identifiant du widget dans le listing
        data.parent = parent; // [NODE]									: Conteneur global du bouton et du contenu
        data.button = newbutton; // [NODE]									: Bouton gerant l'ouverture et la fermeture du contenu
        data.buttoninside = false; // [BOOLEAN] 								: Indicateur si le bouton est ou non un enfant du conteneur a animer
        data.iconbutton = null; // [NODE]									: Icone flottante/independante utilisee pour le clic
        data.content = realcontent; // [NODE]									: Contenu a afficher/masquer
        data.container = animatedcontent; // [NODE]									: Conteneur a animer lors de l'ouverture et la fermeture
        data.focus = null; // [NODE]									: Balise devant receptionner le focus clavier lors de l'ouverture
        data.clickonicon = false; // [BOOLEAN]								: Indicateur d'ajout des actions de souris sur l'icone et non l'entierete du bouton
        data.dependencies = []; // [ARRAY]									: Liste des index des panneaux a fermer lorsque le panneau s'ouvre
        data.indexdependency = null; // [NUMBER] 								: Position du conteneur accordeon au sein des dependances
        data.callback = {};
        data.callback.beforeanim = null; // [FUNCTION] 								: Fonction a appeler avant l'animation de changement de l'affichage
        data.callback.afteranim = null; // [FUNCTION] 								: Fonction a appeler apres l'animation de changement de l'affichage
        // Sauvegarde des donnees passees par parametre
        data.clickonicon = Boolean(params.clickonicon);
        data.callback.beforeanim =
          typeof params.cb_beforeanim === 'function'
            ? params.cb_beforeanim
            : function() {
                return true;
              };
        data.callback.afteranim =
          typeof params.cb_afteranim === 'function'
            ? params.cb_afteranim
            : function() {
                return true;
              };
        // Identification du conteneur
        if (String(parent.id).length > 0) {
          data.id = parent.id;
        } else {
          i = new Date();
          data.id = String('aID-' + i.getTime() + '_' + Math.random()).replace(
            '.',
            '-'
          );
        }
        data.reference = 'accordionid_' + data.id;
        // Parametrage des donnees et attributs JS
        data.parent.setAttribute('data-expanded', false);
        // Suppression des liens superflus (liens d'ouverture/fermeture utilises dans la version statique sans JS)
        if (check(params.openbtn))
          params.openbtn.parentNode.removeChild(params.openbtn);
        if (check(params.closebtn))
          params.closebtn.parentNode.removeChild(params.closebtn);
        // Creation de la balise "icone" [+]/[-]
        if (data.clickonicon) {
          b = document.createElement('span');
          b.classList.add('epjs_accordionbutton');
          data.iconbutton = document.createElement('span');
          data.iconbutton.appendChild(document.createTextNode(' '));
          data.iconbutton.classList.add('epjs_accordionicon');
          b.appendChild(data.iconbutton);
          data.button.appendChild(b);
        }
        // Identification de la position du bouton par rapport au conteneur d'animation
        t = data.container.getElementsByTagName('*');
        m = t.length;
        for (i = 0; i < m; i++) {
          if (t[i] == data.button) {
            data.buttoninside = true;
            break;
          }
        }
        // Recherche de la premiere balise devant receptionner le focus
        t = data.content.getElementsByTagName('*');
        m = t.length;
        for (i = 0; i < m; i++) {
          if (
            (t[i].getAttribute('tabindex') &&
              t[i].getAttribute('tabindex') != '-1') ||
            t[i].tagName.toLowerCase() == 'a' ||
            t[i].tagName.toLowerCase() == 'input' ||
            t[i].tagName.toLowerCase() == 'button' ||
            t[i].tagName.toLowerCase() == 'textarea'
          ) {
            data.focus = t[i];
            break;
          }
        }
        // Traitement des elements interactifs du menu
        t = data.content.getElementsByTagName('*');
        m = t.length;
        for (i = 0; i < m; i++) {
          if (
            (t[i].getAttribute('tabindex') &&
              t[i].getAttribute('tabindex') != '-1') ||
            t[i].tagName.toLowerCase() == 'a' ||
            t[i].tagName.toLowerCase() == 'input' ||
            t[i].tagName.toLowerCase() == 'button' ||
            t[i].tagName.toLowerCase() == 'textarea'
          ) {
            t[i].addEventListener(
              'keyup',
              function(e) {
                keyboard(e, i);
              },
              false
            );
          }
        }
        // Sauvegarde des donnees dans la classe
        Data.convertlist.push(data);
        Data.reference[data.reference] = Data.convertlist.length - 1;
        data.index = Data.convertlist.length - 1;
        i = data.index;
        // Deplacement des actions d'ouverture/fermeture sur le nouveau bouton
        data.container.addEventListener(
          'transitionend',
          function(e) {
            endanim(e, i);
          },
          false
        );
        data.button.addEventListener(
          'keydown',
          function(e) {
            keyboard(e, i);
          },
          false
        );
        if (data.clickonicon)
          data.iconbutton.addEventListener(
            'click',
            function(e) {
              click(e, i);
            },
            false
          );
        else
          data.button.addEventListener(
            'click',
            function(e) {
              click(e, i);
            },
            false
          );
        // Activation de l'etat
        state(data, null, true);
      }
    }
    // Appel de la fonction "callback" apres la convertion du selecteur si demandee
    b = false;
    if (params != null) {
      if (typeof params === 'object') {
        if (typeof params.cb_afterconvert === 'function') b = true;
      }
    }
    if (b) params.cb_afterconvert(data != null, data);
    else return { converted: data != null, data: data };
  }
  // Ajout des liaisons entre les panneaux (fermeture des panneaux lorsque le panneau cible est ouvert)
  function setdependency(index, dependencies) {
    var data = Data.convertlist[index];
    if (data != null && dependencies.length > 0) {
      var i;
      var length = dependencies.length;
      for (i = 0; i < length; i++) {
        if (dependencies[i] != index) data.dependencies.push(dependencies[i]);
        else data.indexdependency = data.dependencies.length - 1;
      }
      return { executed: true, data: data };
    }
    return { executed: false, data: null };
  }

  // - GESTION DES ETATS DU WIDGET  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // ETAT DU WIDGET : Appel public pour le changement d'etat
  function activate(reference) {
    isNaN(reference)
      ? state(reference, null, true)
      : state(null, reference, true);
  }
  function desactivate(reference) {
    isNaN(reference)
      ? state(reference, null, false)
      : state(null, reference, false);
  }
  // ETAT DU WIDGET : Activation et desactivation des fonctionnalites
  function state(data, index, active) {
    // Identification de l'objet de donnees
    if (data == null) data = Data.convertlist[index];
    if (data == null) return;
    // Verification du traitement prealable du widget
    if (active) {
      if (data.parent.getAttribute('data-accordion') != 'true') {
        data.parent.removeAttribute('data-noanim');
        data.parent.setAttribute('data-accordion', true);
        data.parent.setAttribute('data-expanded', false);
        data.button.setAttribute('aria-selected', false);
        data.button.setAttribute('aria-expanded', false);
        data.button.setAttribute('aria-controls', data.content.id);
        data.button.setAttribute('role', 'tab');
        data.content.setAttribute('aria-hidden', true);
        data.container.setAttribute('role', 'tablist');
        data.container.setAttribute('multiselectable', true);
        data.container.style.height = '';
        data.content.style.display = '';
        data.content.style.opacity = '';
        if (data.dependencies.length > 0) {
          data.button.setAttribute(
            'tabindex',
            data.indexdependency == -1 ? 0 : -1
          );
        } else {
          data.button.setAttribute('tabindex', 0);
        }
      }
    } else {
      if (data.parent.getAttribute('data-accordion')) {
        data.parent.setAttribute('data-accordion', false);
        data.parent.setAttribute('data-expanded', false);
      }
      data.parent.removeAttribute('data-noanim');
      data.button.removeAttribute('aria-selected');
      data.button.removeAttribute('aria-expanded');
      data.button.removeAttribute('aria-controls');
      data.button.removeAttribute('role');
      data.button.removeAttribute('tabindex');
      data.content.removeAttribute('aria-hidden');
      data.container.removeAttribute('role');
      data.container.removeAttribute('multiselectable');
      data.container.style.height = '';
      data.content.style.display = '';
      data.content.style.opacity = '';
    }
  }

  // - GESTION DES ACTIONS SUR LES ELEMENTS DU MENU - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // ACTION : Demande d'ouverture ou de fermeture via le clic "souris" sur le bouton
  function click(e, index) {
    // Identification de l'objet de donnees
    var data = Data.convertlist[index];
    if (data != null) change(data, null, false, true);
  }
  // ACTION : Demande d'ouverture ou de fermeture via la navigation clavier
  function keyboard(e, index) {
    var t;
    var b;
    // Identification de l'objet de donnees
    var data = Data.convertlist[index];
    if (data != null) {
      // Verification de la touche choisie
      var k = null;
      if (window.event) k = event.keyCode;
      else if (e) k = e.which ? e.which : 0;
      // Identification de l'objet de l'appel
      if (
        e.target == data.button &&
        data.dependencies.length > 0 &&
        data.indexdependency != null
      ) {
        // Titre d'un panneau
        if (k == 104 || k == 38 || k == 37 || k == 100) {
          // - - - - - - - - - - - - - - - - - - - - - - - - -> deplacement de la selection (touche "8" ou "arrow up" ou "arrow left" ou "4")
          if (data.indexdependency >= 0) {
            Data.convertlist[
              data.dependencies[data.indexdependency]
            ].button.focus();
          }
          b = false;
        } else if (k == 98 || k == 40 || k == 39 || k == 102) {
          // - - - - - - - - - - - - - - - - - - - - -> deplacement de la selection (touche "2" ou "arrow bottom" ou "arrow right" ou "6")
          if (data.indexdependency < data.dependencies.length - 1) {
            Data.convertlist[
              data.dependencies[data.indexdependency + 1]
            ].button.focus();
          }
          b = false;
        } else if (k == 13 || k == 32) {
          // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -> ouverture/fermeture du menu (touche "enter" ou "space"){
          change(data, null, null, true, true);
          b = false;
        } else if (k == 36 || k == 35) {
          // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -> deplacement de la selection au debut ou la fin du menu (touche "home" ou "end"){
          if (
            (data.indexdependency < 0 && k == 36) ||
            (data.indexdependency > data.dependencies.length - 2 && k == 35)
          ) {
            data.button.focus();
          } else {
            Data.convertlist[
              data.dependencies[k == 36 ? 0 : data.dependencies.length - 1]
            ].button.focus();
          }
          b = false;
        } else b = true;
      } else if (e.ctrlKey && (k == 38 || k == 37)) {
        // Element interactif de l'accordeon
        data.button.focus();
        b = false;
      } else b = true;
    } else b = true;
    // Autorisation de la suite d'evenement
    if (b) {
      return true;
    }
    e.preventDefault();
    return false;
  }
  // ACTION : Demande specifique d'ouverture
  function open(index, noaction, dependencies, noanim) {
    var data = Data.convertlist[index];
    if (data != null)
      change(data, true, noaction, dependencies === true, false, noanim);
  }
  // ACTION : Demande specifique de fermeture
  function close(index, noaction, dependencies, noanim) {
    var data = Data.convertlist[index];
    if (data != null)
      change(data, false, noaction, dependencies === true, false, noanim);
  }

  // - GESTION DE L'OUVERTURE ET FERMETURE DE PANNEAUX  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // OUVERTURE/FERMETURE : Activation et desactivation des fonctionnalites
  function change(data, view, noaction, dependencies, focus, noanim) {
    // Recherche de l'etat a afficher
    view =
      view === true || view === false
        ? view
        : !(data.parent.getAttribute('data-expanded') === 'true');
    // Verification du changement demande
    if (data.parent.getAttribute('data-accordion') == 'true') {
      if (String(view) != data.parent.getAttribute('data-expanded')) {
        // Recuperation de la hauteur reelle des liens
        var h = calcul(data);
        // Calcul de la nouvelle hauteur a definir pour l'anim via CSS
        var i = data.buttoninside ? data.button.offsetHeight + 'px' : 0;
        var t = !view ? i : h + 'px';
        // Assignation de la hauteur actuelle
        data.parent.setAttribute('data-noanim', true);
        data.container.style.height = !view ? h + 'px' : i;
        data.content.style.display = '';
        // Autorisation d'affichage
        data.parent.setAttribute('data-expanded', view);
        data.button.setAttribute('aria-selected', view);
        data.button.setAttribute('aria-expanded', view);
        data.content.setAttribute('aria-hidden', !view);
        // Lancement des fermetures des panneaux lies lors de l'ouverture
        if (view && dependencies && data.dependencies.length > 0) {
          h = data.dependencies.length - 1;
          for (h = h; h >= 0; h--) {
            close(data.dependencies[h], true, false);
          }
        }
        // Gestion du focus sur le panneau et des panneaux associes
        if (dependencies && data.dependencies.length > 0) {
          // Assignation du focus sur le panneau appelant la fonction
          data.button.setAttribute('tabindex', 0);
          // Desactivation des panneaux lies
          h = data.dependencies.length - 1;
          for (h = h; h >= 0; h--) {
            Data.convertlist[data.dependencies[h]].button.setAttribute(
              'tabindex',
              -1
            );
          }
        } else if (data.dependencies.length == 0) {
          // Activation du panneau independant
          data.button.setAttribute('tabindex', 0);
        }
        // Autorisation de lancement des scripts callback en debut et fin d'animation
        if (noaction) data.parent.removeAttribute('data-callback');
        else data.parent.setAttribute('data-callback', true);
        // Lancement de l'affichage anime
        if (noanim === true) {
          data.container.style.height = t;
        } else if (noaction)
          setTimeout(function() {
            data.parent.removeAttribute('data-noanim');
            data.container.style.height = t;
          }, 10);
        else if (data.callback.beforeanim(null, data, view))
          setTimeout(function() {
            data.parent.removeAttribute('data-noanim');
            data.container.style.height = t;
          }, 10);
      }
    }
  }
  // OUVERTURE/FERMETURE : Nettoyage des styles CSS apres animation
  function endanim(e, index) {
    // Identification de l'objet de donnees
    var data = Data.convertlist[index];
    if (data != null) {
      var a = Boolean(data.parent.getAttribute('data-callback'));
      // Nettoyage des styles CSS de l'animation
      data.container.style.height = '';
      data.content.style.display = '';
      data.content.style.opacity = '';
      data.parent.removeAttribute('data-callback');
      data.parent.removeAttribute('data-noanim');
      // Lancement de l'appel "callback" si besoin
      if (a)
        data.callback.afteranim(
          null,
          data,
          !(data.parent.getAttribute('data-expanded') === 'true')
        );
    }
  }
  // OUVERTURE/FERMETURE : Calcul de la hauteur du bloc de contenu pour l'animation
  function calcul(data) {
    var height;
    data.parent.setAttribute('data-noanim', true);
    if (data.buttoninside)
      data.container.style.height = data.button.offsetHeight + 'px';
    else data.container.style.height = 0;
    data.content.style.display = 'block';
    data.content.style.opacity = '0';
    height = data.content.offsetHeight;
    if (data.buttoninside) height += data.button.offsetHeight;
    data.container.style.height = '';
    data.content.style.display = '';
    data.content.style.opacity = '';
    data.parent.removeAttribute('data-noanim');
    return height;
  }

  // - GESTION DES FONCTIONS PUBLIQUES  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  return {
    // Fonction de convertion d'un conteneur en bloc "expand/collapse"
    convert: convert, // Parametres de la fonction : Accordion.convert(container, button, animatedcontent, realcontent, params)
    // 	> container						// [NODE] 							(mandatory)	: Reference de la balise "conteneur global" comprenant le bouton et le contenu
    // 	> button 						// [NODE] 							(mandatory)	: Reference de la balise "bouton" gerant l'ouverture et la fermeture du contenu.
    // 	> animatedcontent 				// [NODE] 							(mandatory)	: Reference de la balise a animer lors de l'ouverture et la fermeture.
    // 	> realcontent 					// [NODE] 							(mandatory)	: Reference de la balise utilisee comme reference pour la hauteur du panneau ouvert (doit etre un enfant de "animatedcontent").
    // 	> params 						// [OBJECT] 						(optional) 	: Objet de personnalisation du composant
    // 	  > params.clickonicon			// [BOOLEAN] (default value: false)				: Indicateur d'ajout des actions de souris sur l'icone et non l'entierete du bouton
    // 	  > params.openbtn				// [NODE] 										: Conteneur du bouton d'ouverture  [+] d'origine (utilise sans JS) a supprimer dans la version JS
    // 	  > params.closebtn				// [NODE] 										: Conteneur du bouton de fermeture [-] d'origine (utilise sans JS) a supprimer dans la version JS
    // 	  > params.cb_afterconvert		// [FUNCTION] (need a return value = true)		: Fonction appelee apres la convertion du bloc
    // 	  > params.cb_beforeanim		// [FUNCTION] (need a return value = true)		: Fonction appelee avant l'animation d'ouverture ou la fermeture du bloc de contenu
    // 	  > params.cb_afteranim			// [FUNCTION] (need a return value = true)		: Fonction appelee apres l'animation d'ouverture ou la fermeture du bloc de contenu
    //
    // Reponse de la fonction : Accordion.convert() = result
    // 	> result.converted	 			// [BOOLEAN]									: Defini si la fonctionnalite a pu etre ajoutee ou non
    // 	> result.data	 				// [OBJECT]										: Objet de donnees contenant toutes les informations du composant converti (vaut "null" si la convertion a echoue)

    // Fonction de liaison des autres composants "accordion" deja convertis a fermer lors de l'ouverture du composant principal
    setdependency: setdependency, // Parametres de la fonction : Accordion.setdependency(reference, dependencies)
    // 	> reference 					// [NUMBER]							(mandatory) : Reference (numerique) du composant converti concerne
    // 	> dependencies 					// [ARRAY] 							(mandatory) : Liste de references des composants (index "numerique") a associer lors de l'ouverture
    // Reponse de la fonction : Accordion.setdependency() = result
    // 	> result.executed	 			// [BOOLEAN]									: Defini si la demande a reussi ou non
    // 	> result.data	 				// [OBJECT]										: Objet de donnees contenant toutes les informations du composant

    // Fonction d'activation et de desactivation du composant apres convertion
    activate: activate, // Parametres de la fonction : Accordion.activate(reference)
    // 	> reference 					// [NUMBER]							(mandatory) : Reference (numerique) du composant converti a activer
    desactivate: desactivate, // Parametres de la fonction : Accordion.desactivate(reference)
    // 	> reference 					// [NUMBER]							(mandatory) : Reference (numerique) du composant converti a desactiver

    // Fonction demandant l'ouverture et fermeture d'un composant "accordion"
    open: open, // Parametres de la fonction : Accordion.open(reference, no-action, depedency, no-anim)
    // 	> reference 					// [NUMBER]							(mandatory) : Reference (numerique) du composant converti a activer
    // 	> no-action 					// [BOOLEAN] (default value: false)				: Defini si les fonctions "callback" doivent etre exectuee lors de l'action
    // 	> dependencies					// [BOOLEAN] (default value: false)				: Defini si l'action doit modifier l'etat des composants associes
    // 	> no-anim						// [BOOLEAN] (default value: false)				: Defini si l'action doit etre animee ou non
    // Fonction d'activation du composant apres convertion
    close: close, // Parametres de la fonction : Accordion.close(reference, no-action, depedency, no-anim)
    // 	> reference 					// [NUMBER]							(mandatory) : Reference (numerique) du composant converti a desactiver
    // 	> no-action 					// [BOOLEAN] (default value: false)				: Defini si les fonctions "callback" doivent etre exectuee lors de l'action
    // 	> dependencies					// [BOOLEAN] (default value: false)				: Defini si l'action doit modifier l'etat des composants associes
    // 	> no-anim						// [BOOLEAN] (default value: false)				: Defini si l'action doit etre animee ou non
  };
})();

/* ============================================================================================================================================================================ */
/* === EXPAND/COLLAPSE (Version 2 [+]/[-]) =============================================================================================================== */
/* ============================================================================================================================================================================ */

// method to fix incompatibility between IE and 'closest'
(function() {
  if (!Element.prototype.matches) {
    Element.prototype.matches =
      Element.prototype.msMatchesSelector ||
      Element.prototype.webkitMatchesSelector;
  }

  if (!Element.prototype.closest) {
    Element.prototype.closest = function(s) {
      var el = this;

      do {
        if (el.matches(s)) return el;
        el = el.parentElement || el.parentNode;
      } while (el !== null && el.nodeType === 1);
      return null;
    };
  }
})();

function expandQuestions() {
  var headings = document.querySelectorAll('.ep_expand-title');

  Array.prototype.forEach.call(headings, function(h) {
    var btn = h.querySelector('.ep_expand-trigger');
    var target = h.nextElementSibling;

    if (
      h.closest('.ep_item').classList.contains('ep_expand') &&
      !h.closest('.ep_item').classList.contains('loaded-question')
    ) {
      var button = h.parentNode.getElementsByTagName('button')[0];
      button.setAttribute('data-expanded', true);
      button.setAttribute('aria-expanded', true);
      var div = h.parentNode.getElementsByClassName('ep_expand-content')[0];
      div.removeAttribute('hidden');
      h.closest('.ep_item').classList.add('loaded-question');
    } else {
      if (
        h
          .closest('.ep_item')
          .classList.contains('ep_wrapper-expand-collapse') &&
        !h.closest('.ep_item').classList.contains('loaded-question')
      ) {
        h.closest('.ep_item').classList.remove('ep_wrapper-expand-collapse');
        var button = h.parentNode.getElementsByTagName('button')[0];
        button.setAttribute('data-expanded', false);
        button.setAttribute('aria-expanded', false);
        var div = h.parentNode.getElementsByClassName('ep_expand-content')[0];
        div.setAttribute('hidden', true);
        h.closest('.ep_item').classList.add('loaded-question');
      }
    }

    function handleClick(event) {
      var wrapperExpand = event.target.closest('.ep_item');
      var wrapperExpandStyle = wrapperExpand.classList.contains(
        'ep_wrapper-expand-collapse'
      );
      var expanded = btn.getAttribute('aria-expanded') === 'true';
      var expandedData = btn.getAttribute('data-expanded') === 'true';
      if (wrapperExpandStyle) {
        wrapperExpand.classList.remove('ep_wrapper-expand-collapse');
      } else {
        wrapperExpand.classList.add('ep_wrapper-expand-collapse');
      }
      btn.setAttribute('aria-expanded', !expanded);
      btn.setAttribute('data-expanded', !expandedData);
      target.hidden = expanded;
    }
    if (btn && !btn.classList.contains('has-click-handler')) {
      btn.classList.add('has-click-handler');
      btn.addEventListener('click', handleClick);
    }
  });
}

window.addEventListener('load', expandQuestions);
window.addEventListener('scroll', expandQuestions);

/* ============================================================================================================================================================================ */
/* === GESTION DES ACTIONS DE SUIVI PARALLAXE ================================================================================================================================= */
/* ============================================================================================================================================================================ */

var FollowingScroll = (function FollowingScroll() {
  var Data = { convertlist: [], reference: {}, toolbar: null };

  // - VALIDATION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // VALIDATION : controle de l'objet de donnees passe en parametre
  function check(d) {
    if (typeof d === 'object') {
      if (d != null) {
        return d.tagName != null;
      }
      return false;
    }
    return false;
  }

  // - CONVERTION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  function convert(columntarget, contenttarget, params) {
    // Initialisation des variables
    var i;
    var m;
    var o;
    var t;
    var b;
    var l;
    var data = null;
    // Recherche des balises utiles
    o = {};
    o.parent = columntarget;
    o.component = null;
    if (check(o.parent)) {
      if (
        !o.parent.getAttribute('data-following') &&
        o.parent.classList.contains('ep_gridcolumn')
      ) {
        // Analyse de la demande specifique d'une balise a suivre
        if (check(contenttarget)) {
          o.component = contenttarget;
        } else {
          // Recherche de la balise a animer
          l = [];
          b = null;
          m = o.parent.childNodes.length - 1;
          for (i = 0; i < m; i++) {
            t = o.parent.childNodes[i];
            if (check(t)) {
              if (
                t.classList.contains('ep_gridrow') ||
                t.classList.contains('ep_gridcolumn-content')
              ) {
                b = t;
                break;
              }
            }
          }
          if (b != null) {
            m = b.childNodes.length - 1;
            for (i = 0; i < m; i++) {
              if (check(b.childNodes[i])) l.push(b.childNodes[i]);
            }
            if (l.length == 1) o.component = l[0];
            else o.parent = null;
          } else o.parent = null;
        }
      } else o.parent = null;
    }
    // Verification des balise transmises en parametre
    if (check(o.parent) && check(o.component)) {
      if (o.parent.classList.contains('ep_gridcolumn') && o.component != null) {
        // Recherche de la barre d'outil utilisee en survol lors du parallaxe
        if (Data.toolbar == null) {
          t = document.getElementById('website-header');
          if (check(t)) {
            t = t.getElementsByClassName('ep_toolbar');
            i = t.length - 1;
            for (i = i; i >= 0; i--) {
              if (t[i].classList.contains('ep_bottom')) {
                Data.toolbar = t[i];
                break;
              }
            }
          }
        }
        // Initialisation de l'objet de donnees du widget
        data = {};
        data.index = null; // [INT]									: Identifiant du widget dans le listing
        data.reference = null; // [STRING]									: Identifiant de la balise convertie
        data.column = o.parent; // [NODE]									: Reference de la balise "colonne" contenant les elements a animer
        data.component = o.component; // [NODE]									: Balise principale a animer
        // Sauvegarde des donnees dans la classe
        Data.convertlist.push(data);
        data.index = Data.convertlist.length - 1;
        data.reference = 'followingscrollid_' + data.index;
        Data.reference[data.reference] = data.index;
        data.column.setAttribute('data-following', data.index);
        // Ajout des evenements de mises a jour
        if (Data.convertlist.length < 2 && Data.toolbar != null) {
          document.addEventListener(
            'scroll',
            function(e) {
              update(e);
            },
            false
          );
          window.addEventListener(
            'resize',
            function(e) {
              update(e);
            },
            false
          );
        }
      } else data = null;
    } else data = null;
    // Appel de la fonction "callback" apres la convertion du selecteur si demandee
    b = false;
    if (params != null) {
      if (typeof params === 'object') {
        if (typeof params.cb_afterconvert === 'function') b = true;
      }
    }
    if (b) params.cb_afterconvert(data != null, data);
    else return { converted: data != null, data: data };
  }

  // - GESTION DE L'ACTION DE SUIVI DU SCROLL - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // AFFICHAGE : Mise a jour de l'affichage du composant
  function refresh(index, call_by_scroll) {
    // Calcul de la hauteur du scroll
    var s = Math.max(
      document.body.scrollTop,
      document.documentElement.scrollTop
    );
    // Verification de la demande : tout mettre a jour ou juste un specifique ?
    if (!isNaN(index) && index >= 0 && index < Data.convertlist.length) {
      parallax(s, Data.convertlist[index], call_by_scroll);
    } else {
      var i = Data.convertlist.length - 1;
      for (i = i; i >= 0; i--) {
        parallax(s, Data.convertlist[i], call_by_scroll);
      }
    }
  }
  function askrefresh(index) {
    arguments.length == 1 ||
    (arguments.length == 2 && typeof arguments[0] === 'object')
      ? refresh(arguments[1], false)
      : refresh(index, false);
  }
  // AFFICHAGE : Repositionnement du composant selon le scroll de la page
  function parallax(scrollposition, data, delay) {
    var y = 0;
    var height =
      window.innerHeight ||
      document.documentElement.clientHeight ||
      document.body.clientHeight;
    var morey = 0;
    var limit = { height: 0, y: 0 };
    var target = { height: 0, y: 0 };
    // Calcul de la hauteur du composant et de la zone visible
    target.y = data.component.offsetTop;
    target.height = data.component.offsetHeight;
    limit.y = data.column.offsetTop;
    limit.height = data.column.offsetHeight;
    // Correction du scroll (prise en compte de la hauteur de la barre d'outil parallaxe)
    if (document.body.getAttribute('data-headerparallax')) {
      morey = Data.toolbar.offsetHeight;
    }
    // Analyse de la hauteur du composant
    if (target.height < limit.height) {
      if (target.height > height) {
        // Calcul de la position a assigner au composant
        if (target.y + target.height > scrollposition + height) {
          y = 0;
        } else if (scrollposition + height < limit.y + limit.height) {
          y = Math.max(0, scrollposition + height - (target.y + target.height));
        } else {
          y = Math.max(0, limit.height - target.height);
        }
      } else {
        // Calcul de la position a assigner au composant
        y = Math.max(
          0,
          Math.min(
            limit.height - target.height,
            scrollposition + morey - limit.y + 10
          )
        );
      }
    } else {
      y = 0;
    }
    // Definition du delais d'animation (si la fonction est bien appelee par les evenements de scroll)
    data.component.style.transitionDelay = delay ? '' : '0s';
    // Assignation du la nouvelle coordonnee
    data.component.style.transform = 'translate(0, ' + y + 'px)';
    data.component.style.webkitTransform = 'translate(0, ' + y + 'px)';
  }
  // Appel de l'action par la fonction elle-meme
  function update(e) {
    refresh(-1, true);
  }

  // - GESTION DES FONCTIONS PUBLIQUES  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  return {
    // Fonction d'ajout de la fonctionnalite de suivi du scroll a un composant HTML selon les limites de la colonne
    convert: convert, // Parametres de la fonction : FollowingScroll.convert(container, reference, params)
    // 	> container						// [NODE] 							(mandatory)	: Reference de la balise "colonne" contenant le bloc a manipuler
    // 	> reference						// [NODE] 							(mandatory)	: Reference de la balise a manipuler
    // 	> params 						// [OBJECT] 						(optional) 	: Objet de personnalisation du composant
    // 	  > params.cb_afterconvert		// [FUNCTION] (need a return value = true)		: Fonction appelee apres la convertion du bloc
    //
    // Reponse de la fonction : FollowingScroll.convert() = result
    // 	> result.converted	 			// [BOOLEAN]									: Defini si la fonctionnalite a pu etre ajoutee ou non
    // 	> result.data	 				// [OBJECT]										: Objet de donnees contenant toutes les informations du composant converti (vaut "null" si la convertion a echoue)

    // Fonction de mise a jour de la position du composant
    refresh: askrefresh, // Parametres de la fonction : FollowingScroll.refresh(reference)
    // 	> reference 					// [NUMBER]							(optional) : Reference du composant a manipuler (si non mentionne, tous les composants convertis seront mise a jour)
  };
})();

/* ============================================================================================================================================================================ */
/* === GESTION DES MENUS "TABLE OF CONTENT" =================================================================================================================================== */
/* ============================================================================================================================================================================ */

var TableOfContent = (function TableOfContent() {
  var Data = { convertlist: [], reference: {}, toolbar: null };

  // - VALIDATION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // VALIDATION : controle de l'objet de donnees passe en parametre
  function check(d) {
    if (typeof d === 'object') {
      if (d != null) {
        return d.tagName != null;
      }
      return false;
    }
    return false;
  }

  // - CONVERTION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  function convert(target, params) {
    // Initialisation des variables
    var i;
    var m;
    var o;
    var t;
    var b;
    var l;
    var data = null;
    // Recherche des balises utiles
    o = {};
    o.parent = target;
    o.menu = null;
    o.sections = [];
    if (check(o.parent)) {
      if (!o.parent.getAttribute('data-tableofcontent')) {
        // Recherche de la balise parent
        t = o.parent.getElementsByClassName('ep_tableofcontent-menu');
        if (t.length > 0) o.menu = t[0];
      } else {
        o.parent = null;
      }
    }
    // Verification des balise transmises en parametre
    if (check(o.parent) && check(o.menu)) {
      // Definition de la recherche des balises pour l'affichage en accordeon
      f = function(f_tagparent) {
        var f_p;
        var f_t;
        var f_i;
        // Initialisation de l'objet de donnees
        var f_d = {
          parent: f_tagparent,
          title: null,
          ticon: null,
          open: null,
          close: null,
          content: null,
          list: null,
        };
        // Recherche des liens d'ouverture/fermeture sans JS
        f_t = f_d.parent.getElementsByClassName('ep_menu-access');
        f_i = f_t.length - 1;
        for (f_i = f_i; f_i >= 0; f_i--) {
          if (f_t[f_i].classList.contains('ep_openaccess')) f_d.open = f_t[f_i];
          else if (f_t[f_i].classList.contains('ep_closeaccess'))
            f_d.close = f_t[f_i];
          if (f_d.open != null && f_d.close != null) break;
        }
        // Recherche du titre du bloc pour la convertion en lien d'ouverture/fermeture via JS
        f_t = f_d.parent.getElementsByClassName('ep_title');
        if (f_t.length > 0) {
          f_d.title = f_t[0];
        }
        // Recherche du bloc de contenu a deployer
        f_t = f_d.parent.getElementsByClassName('ep_list');
        if (f_t.length > 0) {
          f_d.content = f_t[0];
          f_t = f_d.content.getElementsByTagName('ul');
          if (f_t.length > 0) {
            f_d.list = f_t[0];
          }
        }
        // Envoi du resultat
        return check(f_d.parent) &&
          check(f_d.title) &&
          check(f_d.open) &&
          check(f_d.close) &&
          check(f_d.content) &&
          check(f_d.list)
          ? f_d
          : null;
      };
      // Recherche des sections du menu a convertir en accordeon
      t = o.menu.getElementsByClassName('ep_content');
      i = t.length - 1;
      for (i = i; i >= 0; i--) {
        r = f(t[i]);
        if (r != null) o.sections.push(r);
      }
      // Verification des donnees obtenues
      if (o.parent.classList.contains('ep_gridcolumn') && o.menu != null) {
        // Initialisation de l'objet de donnees du widget
        data = {};
        data.index = null; // [INT]									: Identifiant du widget dans le listing
        data.reference = null; // [STRING]									: Identifiant de la balise convertie
        data.column = o.parent; // [NODE]									: Reference de la balise [colonne] parente au menu
        data.menu = o.menu; // [NODE]									: Balise principale du menu
        data.items = []; // [ARRAY]									: Liste des references des sections [+]/[-]
        // Sauvegarde des donnees dans la classe
        Data.convertlist.push(data);
        data.index = Data.convertlist.length - 1;
        data.reference = 'tableofcontentid_' + data.index;
        Data.reference[data.reference] = data.index;
        data.column.setAttribute('data-tableofcontent', data.index);
        data.column.classList.remove('ep-layout_followingscroll');
        // Autorisation de l'affichage visuel
        data.menu.setAttribute('data-converted', true);
        // Traitement du suivi du menu
        t = FollowingScroll.convert(o.parent, o.menu, null);
        if (t.converted) data.follow = t.data.index;
        // Convertion de la liste des elements en mode accordeon [+]/[-]
        if (o.sections.length > 0) {
          r = null;
          i = o.sections.length - 1;
          i = o.sections.length - 1;
          for (i = i; i >= 0; i--) {
            t = Accordion.convert(
              o.sections[i].parent, // Reference du conteneur global
              o.sections[i].title, // Reference du nouveau bouton d'ouverture [+]/[-] (conteneur global)
              o.sections[i].content, // Reference du conteneur a animer
              o.sections[i].list, // Reference de la liste generale des liens
              {
                openbtn: o.sections[i].open, // Reference de la balise du bouton d'ouverture d'origine a supprimer
                closebtn: o.sections[i].close, // Reference de la balise du bouton de fermeture d'origine a supprimer
                cb_afteranim: function(e) {
                  refresh(data.follow);
                }, // Fonction a appeler lors de la fin de l'animation d'ouverture/fermeture
              }
            );
            if (t.converted) {
              data.items.push(t.data.index);
              if (o.sections[i].parent.getAttribute('data-selected') == 'true')
                r = t.data.index;
            }
          }
        }
        // Ajout des dependances entre les sections
        i = data.items.length;
        for (i = i; i >= 0; i--) {
          Accordion.setdependency(data.items[i], data.items);
        }
        // Ouverture du menu selectionne lors de l'initialisation de la page
        if (r != null) Accordion.open(r, true, true, true);
      } else data = null;
    }
    // Appel de la fonction "callback" apres la convertion du selecteur si demandee
    b = false;
    if (params != null) {
      if (typeof params === 'object') {
        if (typeof params.cb_afterconvert === 'function') b = true;
      }
    }
    if (b) params.cb_afterconvert(data != null, data);
    else return { converted: data != null, data: data };
  }

  // - GESTION DE L'OUVERTURE ET FERMETURE DE PANNEAUX  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // AFFICHAGE : Mise a jour de l'affichage du menu
  function refresh(index) {
    index =
      arguments.length[2] && typeof arguments[1] === 'object'
        ? arguments[2]
        : arguments[1];
    if (!isNaN(index) && index >= 0 && index < Data.convertlist.length) {
      FollowingScroll.refresh(Data.convertlist[index]);
    } else {
      var i = Data.convertlist.length - 1;
      for (i = i; i >= 0; i--) {
        FollowingScroll.refresh(Data.convertlist[i]);
      }
    }
  }

  // - GESTION DES FONCTIONS PUBLIQUES  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  return {
    // Fonction ajoutant les fonctionnalites au menu "Table of Content"
    convert: convert, // Parametres de la fonction : TableOfContent.convert(reference, params)
    // 	> reference						// [NODE] 							(mandatory)	: Reference de la balise "menu"
    // 	> params 						// [OBJECT] 						(optional) 	: Objet de personnalisation du composant
    // 	  > params.cb_afterconvert		// [FUNCTION] (need a return value = true)		: Fonction appelee apres la convertion du bloc
    //
    // Reponse de la fonction : TableOfContent.convert() = result
    // 	> result.converted	 			// [BOOLEAN]									: Defini si la fonctionnalite a pu etre ajoutee ou non
    // 	> result.data	 				// [OBJECT]										: Objet de donnees contenant toutes les informations du composant converti (vaut "null" si la convertion a echoue)

    // Fonction de mise a jour de la position (scroll) du composant
    refresh: refresh, // Parametres de la fonction : TableOfContent.refresh(reference)
    // 	> reference 					// [NUMBER]							(optional) : Reference du composant a manipuler (si non mentionne, tous les composants convertis seront mise a jour)
  };
})();

/* ============================================================================================================================================================================ */
/* === INITIALISATION DES FONCTIONNALITES DU SITE ============================================================================================================================= */
/* ============================================================================================================================================================================ */

(function() {
  var ctx = this || window;
  var Data = {};
  Data.initscript = true; // Indicateur d'ajout d'evenement
  Data.toolbar = null; // Donnees utiles pour l'affichage parallaxe de l'entete du site
  Data.language = null; // Donnees utiles pour la convertion du selecteur linguistique
  Data.otherwebsites = null; // Donnees utiles pour la convertion du selecteur des autres sites
  Data.navigation = null; // Donnees utiles pour l'ouverture/fermeture du menu de navigation
  Data.search = null; // Donnees utiles pour l'ouverture/fermeture du menu de recherche
  Data.footer = null; // Donnees utiles pour l'ouverture/fermeture du pied de page
  Data.tableofcontent = null; // Donnees utiles pour l'ouverture/fermeture du menu sommaire (optionnel)
  Data.accordions = null; // Donnees utiles pour la convertion des boites en accordeon
  Data.timer = 0; // Interval pour les mouvements de scroll

  // - VALIDATION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // VALIDATION : controle de la balise de donnees passe en parametre
  function check(d) {
    if (typeof d === 'object') {
      if (d != null) {
        return d.tagName != null;
      }
      return false;
    }
    return false;
  }

  // - INITIALISATION - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  ctx.init = function(e) {
    var i;
    var d;
    var t;
    var r;
    var m;
    var f;
    var o;
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // Activation des traitements JavaScript
    document.body.setAttribute('data-jsactive', true);
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // Identification du type de support utilise pour la lecture ecran
    // Liste des appareils mobiles reconnus
    m = [
      'android',
      'avantgo',
      'blackberry',
      'blazer',
      'eudoraweb',
      'handspring',
      'htc',
      'iphone',
      'ipad',
      'ipod',
      'kyocera',
      'lg',
      'motorola',
      'netfront',
      'nokia',
      'palm',
      'playstation portable',
      'samsung',
      'smartphone',
      'sonyericsson',
      'symbian',
      'wap',
      'windows ce',
    ];
    i = ['iphone', 'ipad', 'ipod'];
    // Identification du navigateur et de l'OS
    d = navigator.userAgent;
    d = String(d).toLowerCase();
    // Recherche du navigateur dans la liste
    t = m.length - 1;
    for (t = t; t >= 0; t--) {
      if (d.indexOf(m[t]) > -1) {
        document.body.setAttribute('data-ismobile', true);
        break;
      }
    }
    if (document.body.getAttribute('data-ismobile')) {
      t = i.length - 1;
      for (t = t; t >= 0; t--) {
        if (d.indexOf(i[t]) > -1) {
          document.body.setAttribute('data-ios', true);
          break;
        }
      }
    }
    // Recherche du navigateur IE
    if (
      navigator.appName.toLowerCase().indexOf('microsoft internet explorer') >=
        0 ||
      (navigator.appName.toLowerCase().indexOf('netscape') >= 0 &&
        Boolean(navigator.userAgent.match(/Trident\/7\./)))
    )
      document.body.setAttribute('data-isIE', true);
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    var wailinks = null;
    var site = document.getElementById('website');
    var content = document.getElementById('website-body');
    if (check(site)) {
      // MENU RACCOURCIS : Recherche du conteneur
      t = document.getElementById('waimenu');
      if (check(t)) {
        wailinks = t.getElementsByTagName('a');
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // BARRE D'OUTILS : Recherche des balises (superieure et inferieure)
      d = { top: null, bottom: null };
      t = site.getElementsByClassName('ep_toolbar');
      i = t.length - 1;
      for (i = i; i >= 0; i--) {
        if (t[i].classList.contains('ep_top')) d.top = t[i];
        else if (t[i].classList.contains('ep_bottom')) d.bottom = t[i];
        if (d.top != null && d.bottom != null) break;
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // BARRE D'OUTILS : Traitement de la barre superieure (menu linguistique)
      if (Data.language == null && d.top != null) {
        // Convertion du menu linguistique original
        t = document.getElementById('language-select');
        if (check(t)) {
          o = Select.convert(t, { autoexecute: true });
          if (o.converted) Data.language = o.data;
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // BARRE D'OUTILS : Traitement de la barre superieure (autres planetes)
      if (Data.otherwebsites == null && d.top != null) {
        // Duplication du menu "autres sites" par un selecteur JS pour les petites resolutions
        t = document.getElementById('otherwebsites');
        if (check(t)) {
          r = { parent: t, list: null, links: null, placeholder: null };
          t = r.parent.getElementsByTagName('ol');
          if (t.length > 0) t = t[0];
          if (check(t)) {
            // Fonction temporaire du traitement des liens
            f = function(f_id, f_parent, f_placeholder, f_links) {
              var f_m;
              var f_t;
              var f_i;
              var f_o;
              // Creation du selecteur
              f_t = document.createElement('select');
              f_t.setAttribute('id', f_id + '-selectmobile');
              f_t.setAttribute('aria-labelledby', f_id + '-label');
              f_t.classList.add('ep_field');
              // Nettoyage du texte du placeholder
              f_i = f_placeholder.getElementsByClassName('ep_name')[0];
              f_m = f_i.getElementsByTagName('span');
              if (f_m.length > 0) {
                f_i = '';
                for (f_o = 0; f_o < f_m.length; f_o++) {
                  if (!f_m[f_o].classList.contains('ep_hidden'))
                    f_i += f_m[f_o].innerHTML;
                }
              } else {
                f_i = f_i.innerHTML;
              }
              // Creation du placeholder
              f_o = document.createElement('option');
              f_o.setAttribute('value', 'placeholder');
              f_o.setAttribute('selected', 'selected');
              f_o.setAttribute('disabled', 'disabled');
              f_o.setAttribute('data-target', '_self');
              f_o.appendChild(document.createTextNode(f_i));
              f_t.appendChild(f_o);
              // Integration des valeurs
              f_m = f_links.length;
              for (f_i = 0; f_i < f_m; f_i++) {
                f_o = document.createElement('option');
                f_o.setAttribute('value', f_links[f_i].href);
                f_o.setAttribute(
                  'data-target',
                  f_links[f_i].getAttribute('target') == '_blank'
                    ? '_blank'
                    : '_self'
                );
                if (f_links[f_i].getAttribute('title'))
                  f_o.setAttribute('title', f_links[f_i].getAttribute('title'));
                f_o.appendChild(
                  document.createTextNode(
                    f_links[f_i].getElementsByClassName('ep_name')[0].innerHTML
                  )
                );
                f_t.appendChild(f_o);
              }
              // Creation des balises de contenu
              f_i = document.createElement('div');
              f_i.classList.add('ep_select');
              f_i.appendChild(f_t);
              f_m = document.createElement('form');
              f_m.setAttribute('id', f_id + '-formmobile');
              f_m.setAttribute('method', 'get');
              f_m.setAttribute('action', '');
              f_m.classList.add('epjs_mobile');
              f_m.appendChild(f_i);
              // Integration du selecteur
              f_parent.appendChild(f_m);
              // Convertion du selecteur
              f_i = Select.convert(f_t, {
                autoexecute: true,
                cb_selection: function(selectdata) {
                  selectdata.form.action = selectdata.original.value;
                  selectdata.form.target = selectdata.options[
                    selectdata.original.selectedIndex
                  ].original.getAttribute('data-target');
                  Select.updateselection(selectdata, 'placeholder', false);
                  if (selectdata.form.target == '_blank')
                    window.open(selectdata.form.action);
                  else location.href = selectdata.form.action;
                  return false;
                },
              });
              // Autorisation d'acces pour la version mobile
              if (f_i.converted) {
                f_parent.setAttribute('data-converted', true);
                return f_i.data.index;
              }
              return null;
            };
            // Recherche des liens a integrer
            r.list = t;
            t = r.list.getElementsByClassName('ep_item');
            if (t.length > 0) {
              r.links = [];
              m = t.length;
              for (i = 0; i < m; i++) {
                o = t[i].getElementsByTagName('a');
                if (o[0].classList.length == 0) {
                  r.links.push(o[0]);
                }
              }
            }
            // Recherche du libelle pour le placeholder
            t = document.getElementById('otherwebsites-access');
            if (check(t)) r.placeholder = t;
            // Verification de l'acces aux differentes donnees
            if (r.parent != null && r.links != null && r.placeholder != null) {
              // Initialisation de l'objet de donnees
              Data.otherwebsites = { main: null, more: null };
              // Traitement du selecteur principal utilise en petite resolution
              Data.otherwebsites.main = f(
                'otherwebsites',
                r.parent,
                r.placeholder,
                r.links
              );
              // Traitement du second selecteur pour les grandes resolutions uniquement
              t = document.getElementById('more-otherwebsites');
              if (check(t)) {
                r = { parent: t, list: null, links: null, placeholder: null };
                // Recherche du placeholder
                t = document.getElementById('more-otherwebsites-access');
                if (check(t)) r.placeholder = t;
                // Recherche des liens
                t = r.parent.getElementsByTagName('ol');
                if (t.length > 0) t = t[0];
                if (check(t)) {
                  t = t.getElementsByTagName('a');
                  if (t.length > 0) r.links = t;
                }
                // Traitement du selecteur
                if (
                  r.parent != null &&
                  r.links != null &&
                  r.placeholder != null
                ) {
                  Data.otherwebsites.more = f(
                    'more-otherwebsites',
                    r.parent,
                    r.placeholder,
                    r.links
                  );
                }
                // Verification de la convertion des listes
                if (
                  Data.otherwebsites.main == null &&
                  Data.otherwebsites.more == null
                ) {
                  Data.otherwebsites = null;
                } else {
                  if (Data.otherwebsites.main != null)
                    setTimeout(function() {
                      Select.resize(Data.otherwebsites.main);
                    }, 50);
                  if (Data.otherwebsites.more != null)
                    setTimeout(function() {
                      Select.resize(Data.otherwebsites.more);
                    }, 50);
                }
              }
            }
          }
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // BARRE D'OUTILS : Traitement de la barre inferieure (effet parallaxe)
      if (Data.toolbar == null && d.bottom != null) {
        // Recherche de la balise 'header' situee au dessus de la barre d'outil (balise utile pour le calcul du scroll minimum avant d'activer le parallaxe)
        t = document
          .getElementById('website-header')
          .getElementsByClassName('ep_header')[0];
        // Effet Parallaxe : Initialisation de l'objet de donnees
        Data.toolbar = {};
        Data.toolbar.bar = d.bottom; // Reference de la balise de la barre
        Data.toolbar.scrollsize = 0; // Valeur de la hauteur de la scrollbar
        Data.toolbar.page = document.body; // Cible pour l'ajout du parametre de traitement
        Data.toolbar.header = t; // Reference de la hauteur minimum pour l'activation du parallaxe
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // BARRE D'OUTILS : Traitement de la barre inferieure (moteur de recherche)
      if (Data.search == null && Data.toolbar != null) {
        // Traitement du moteur de recherche
        m = document.getElementById('search');
        if (check(m)) {
          t = document.getElementById('search-field');
          d = m.getElementsByClassName('ep_send');
          d = d.length > 0 ? d[0] : null;
          r = m.getElementsByClassName('ep_title');
          r = r.length > 0 ? r[0] : null;
          if (check(t) && check(d) && check(r)) {
            // Initialisation de l'objet de donnees
            Data.search = {};
            Data.search.reducemode = false; // Definition du mode d'affichage du menu : deploye (false) ou reduit (true)
            Data.search.scanmode = 0; // Indicateur de scan de l'etat du champ lorsque le focus est assigne au champ
            Data.search.timer = 0; // Timer pour l'attente avant la cloture du menu
            Data.search.parent = m.parentNode; // Reference au menu
            Data.search.form = m; // Reference au formulaire
            Data.search.field = t; // Reference au champ texte
            Data.search.button = d; // Reference au bouton d'execution du formulaire
            Data.search.access = r; // Reference au bouton d'ouverture/fermeture
            Data.search.animate = Data.search.field.parentNode.parentNode; // Reference du conteneur a animer
            // Suppression des liens d'ouverture/fermeture indesirables
            t = Data.search.parent.getElementsByClassName('ep_menu-access');
            if (t.length > 1) t[1].parentNode.removeChild(t[1]);
            if (t.length > 0) t[0].parentNode.removeChild(t[0]);
            // Activation des mises a jour visuelles
            Data.search.parent.setAttribute('data-converted', true);
            // Traitement des balises pour l'ouverture et la fermeture du menu
            Data.search.access.setAttribute('tabindex', 0);
            Data.search.access.setAttribute('aria-expanded', false);
            Data.search.access.setAttribute(
              'aria-controls',
              'search-contentform'
            );
            Data.search.animate.setAttribute('aria-hidden', true);
            Data.search.animate.setAttribute('id', 'search-contentform');
            // Ajout des evenements pour l'ouverture et la fermeture du menu
            Data.search.access.addEventListener(
              'click',
              ctx.search_display,
              false
            );
            Data.search.animate.addEventListener(
              'transitionend',
              ctx.search_focus,
              false
            );
            Data.search.button.addEventListener(
              'focus',
              ctx.search_button,
              false
            );
            Data.search.button.addEventListener(
              'blur',
              ctx.search_button,
              false
            );
            // Ajout des evenements pour l'activation ou non du formulaire selon le contenu du champ texte
            Data.search.form.addEventListener(
              'submit',
              ctx.search_submit,
              false
            );
            // Ajout de l'evenement pour la navigation clavier
            Data.search.form.addEventListener('keydown', ctx.search_key, true);
            Data.search.form.addEventListener(
              'keyup',
              ctx.search_validation,
              true
            );
            Data.search.field.addEventListener('focus', ctx.search_scan, false);
            Data.search.field.addEventListener('blur', ctx.search_scan, false);
            // Ajout des evenements pour la fermeture du menu via clic hors de la zone
            t = Data.search.parent.getElementsByTagName('*');
            r = t.length - 1;
            Data.search.parent.classList.add('epjs_search');
            for (r = r; r >= 0; r--) {
              t[r].classList.add('epjs_search');
            }
            document.addEventListener('touchstart', ctx.search_check, false);
            document.addEventListener('click', ctx.search_check, false);
            // Verification de l'acces au formulaire
            ctx.search_validation();
          }
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // BARRE D'OUTILS : Traitement de la barre inferieure (menu de navigation)
      if (Data.navigation == null && Data.toolbar != null) {
        d = {
          parent: null,
          display: { parent: null, content: null, open: null, close: null },
          links: null,
        };
        // Recherche des balises
        t = document.getElementById('navigation');
        if (check(t)) {
          d.parent = t;
          // Recherche des liens d'ouverture/fermeture du menu
          t = d.parent.getElementsByClassName('ep_menu-access');
          i = t.length - 1;
          for (i = i; i >= 0; i--) {
            if (t[i].classList.contains('ep_openaccess')) d.display.open = t[i];
            else if (t[i].classList.contains('ep_closeaccess'))
              d.display.close = t[i];
            if (d.display.open != null && d.display.close != null) break;
          }
          // Recherche du conteneur principal a animer
          t = d.parent.getElementsByClassName('ep_menu-container');
          if (t.length > 0) {
            d.display.parent = t[0];
            // Recherche du conteneur de lien
            t = d.display.parent.childNodes.length;
            for (i = 0; i < t; i++) {
              if (check(d.display.parent.childNodes[i])) {
                if (
                  d.display.parent.childNodes[i].tagName.toLowerCase() == 'div'
                ) {
                  d.display.content = d.display.parent.childNodes[i];
                  break;
                }
              }
            }
            // Recherche de la liste des liens du menu (par niveau)
            if (d.display.content != null) {
              t = d.display.content.getElementsByClassName('ep_menu');
              if (t.length > 0) {
                t = t[0];
                d.links = {
                  parent: t,
                  list: { all: [], level0: [], level1: [], level2: [] },
                  ismenu: { level0: [], level1: [], level2: [] },
                };
                // Creation de la fonction de recuperation de noeud selon la profondeur
                f = function(f_parentnode, f_parentlevel, f_parentindex) {
                  var f_i;
                  var f_m;
                  var f_t = f_parentnode.getElementsByTagName('ol');
                  if (f_t.length > 0) {
                    f_t = f_t[0];
                    f_m = f_t.childNodes.length;
                    for (f_i = 0; f_i < f_m; f_i++) {
                      if (check(f_t.childNodes[f_i])) {
                        if (
                          f_t.childNodes[f_i].classList.contains('ep_item') &&
                          f_t.childNodes[f_i].classList.contains(
                            'ep_directlink'
                          )
                        ) {
                          d.links.list.all.push({
                            ismenu: false,
                            tag: f_t.childNodes[f_i],
                            level: f_parentlevel,
                            parent: f_parentindex,
                            children: [],
                            order: d.links.list['level' + f_parentlevel].length,
                          });
                          d.links.list['level' + f_parentlevel].push(
                            d.links.list.all.length - 1
                          );
                          if (f_parentindex != null)
                            d.links.list.all[f_parentindex].children.push(
                              d.links.list.all.length - 1
                            );
                        } else if (
                          f_t.childNodes[f_i].classList.contains('ep_item') &&
                          f_t.childNodes[f_i].classList.contains('ep_hasmenu')
                        ) {
                          d.links.list.all.push({
                            ismenu: true,
                            tag: f_t.childNodes[f_i],
                            level: f_parentlevel,
                            parent: f_parentindex,
                            children: [],
                            order: d.links.list['level' + f_parentlevel].length,
                          });
                          d.links.ismenu['level' + f_parentlevel].push(
                            d.links.list.all.length - 1
                          );
                          d.links.list['level' + f_parentlevel].push(
                            d.links.list.all.length - 1
                          );
                          if (f_parentindex != null)
                            d.links.list.all[f_parentindex].children.push(
                              d.links.list.all.length - 1
                            );
                        }
                      }
                    }
                  }
                };
                // Identification des balises de liens du premier niveau selon les criteres
                f(t, 0, null);
                // Identification des balises de liens du second niveau selon les criteres
                if (d.links.ismenu.level0.length > 0) {
                  m = d.links.ismenu.level0.length;
                  for (i = 0; i < m; i++) {
                    t = d.links.list.all[d.links.ismenu.level0[i]];
                    f(t.tag, 1, d.links.ismenu.level0[i]);
                  }
                }
                // Identification des balises de liens du troisieme niveau selon les criteres
                if (d.links.ismenu.level1.length > 0) {
                  m = d.links.ismenu.level1.length;
                  for (i = 0; i < m; i++) {
                    t = d.links.list.all[d.links.ismenu.level1[i]];
                    f(t.tag, 2, d.links.ismenu.level1[i]);
                  }
                }
                // Verification de la quantite de liens obtenus
                if (d.links.list.all.length <= 0) d.links = null;
              }
            }
          }
        }
        // Verification de l'acces aux balises
        if (
          d.parent != null &&
          d.display.parent != null &&
          d.display.content != null &&
          d.display.open != null &&
          d.display.close != null &&
          d.links != null
        ) {
          // Recherche du tag "categorie" optionnel a afficher en parallaxe
          t = document
            .getElementById('website-header')
            .getElementsByClassName('ep_header');
          // Initialisation de l'objet de donnees
          Data.navigation = {};
          // General
          Data.navigation.menu = d.parent; // Reference du conteneur principal du menu
          Data.navigation.page = document.getElementById('website'); // Reference de la page pour le deplacement du scroll dans la navigation parallaxe
          Data.navigation.headerpage = Data.toolbar.header; // Reference de l'entete de la page pour le deplacement lors de la suppression de la scrollbar
          Data.navigation.headerbar = Data.navigation.menu.parentNode; // Reference du conteneur de la barre de navigation pour l'alignement de l'effet parallaxe lors de la suppression de la scrollbar
          Data.navigation.bodypage = document.getElementById('website-body'); // Reference du corps de la page pour le deplacement lors de la suppression de la scrollbar
          Data.navigation.footerpage = document.getElementById(
            'website-footer'
          ); // Reference du pied de la page pour le deplacement lors de la suppression de la scrollbar
          // Donnees utiles pour la version reduite
          Data.navigation.anim = d.display.content; // Reference du conteneur a animer
          Data.navigation.menuaccess = null; // Reference du bouton d'ouverture et fermeture du menu reduit
          Data.navigation.filter = null; // Reference du selecteur du filtre du menu
          Data.navigation.focus = []; // Reference des balises a cibler lors de l'assignation du focus
          Data.navigation.scrollfollow = false; // Indicateur du suivi du scroll manuel sur le menu
          Data.navigation.cursorY = 0; // Position initial du curseur lors du debut du scroll
          Data.navigation.scrollY = 0; // Position initial du scroll du menu lors du debut du deplacement
          Data.navigation.scrollratio = 0; // Ratio entre la hauteur du menu et la hauteur de la page
          Data.navigation.access = null; // Reference du bouton ayant appele pour la navigation clavier
          // Donnees utiles pour la version deployee
          Data.navigation.bar = d.links.parent; // Reference du conteneur des liens
          Data.navigation.links = null; // Liste des index et balises de tous les elements du menu
          Data.navigation.ismenu = null; // Reference des index des liens de type "menu"
          Data.navigation.selectedlink = null; // Index du lien actuellement accessible via clavier (focus)
          // Ajout du parametre indiquant le traitement du menu
          Data.navigation.menu.setAttribute('data-converted', true);
          // Ajout de l'action d'ecoute pour les clics hors du menu reduit et/ou deploye
          document.addEventListener('click', ctx.navigation_checkclick, false);
          // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - GENERAL
          // Convertion du selecteur de filtre (si present)
          t = Data.navigation.menu.getElementsByClassName('ep_menu-filter');
          if (t.length > 0) {
            t = t[0];
            // Recherche des balises de selection
            t = t.getElementsByTagName('select');
            if (t.length > 0) {
              t = Select.convert(t[0], {
                autoexecute: true,
                openbykeyboard: false,
              });
              if (t.converted) {
                Data.navigation.filter = t.data;
                // Redimensionnement du selecteur pour Firefox
                navigation_select();
              }
            }
          }
          // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - AFFICHAGE DU MENU PRINCIPAL (version reduite)
          // Suppression des boutons d'ouverture et de fermeture du menu inutile pour la version JS
          t = d.display.open.getElementsByTagName('a');
          if (t.length > 0)
            t[0].parentNode.parentNode.removeChild(t[0].parentNode);
          t = d.display.close.getElementsByTagName('a');
          if (t.length > 0)
            t[0].parentNode.parentNode.removeChild(t[0].parentNode);
          // Ajout de la classe CSS utile pour la gestion d'ouverture/fermeture du menu
          t = Data.navigation.menu.getElementsByTagName('*');
          i = t.length - 1;
          for (i = i; i >= 0; i--) {
            t[i].classList.add('epjs_navigation');
          }
          // Sauvegarde du bouton d'acces au menu
          Data.navigation.menuaccess = d.display.open.getElementsByClassName(
            'ep_button'
          )[0].parentNode;
          Data.navigation.menuaccess.setAttribute('tabindex', '0');
          // Ajout des actions sur le bouton d'acces pour l'ouverture du menu reduit
          Data.navigation.menuaccess.addEventListener(
            'click',
            ctx.navigation_switch,
            false
          );
          Data.navigation.menuaccess.addEventListener(
            'keydown',
            ctx.navigation_access,
            false
          );
          // Recherche du premier element cliquable du menu pour la gestion du focus entrant et sortant en mode reduit
          t = Data.navigation.anim.getElementsByClassName('ep_category');
          if (t.length > 0) {
            t = t[0];
            if (t.getElementsByTagName('a').length > 0)
              Data.navigation.focus[0] = {
                type: 'category',
                tag: t.getElementsByTagName('a')[0],
              };
          }
          if (Data.navigation.focus[0] == null)
            Data.navigation.focus[0] = { type: 'menu', tag: null };
          else
            Data.navigation.focus[0].tag.addEventListener(
              'keydown',
              ctx.navigation_keyboard,
              false
            );
          if (Data.navigation.filter != null) {
            Data.navigation.focus[1] = {
              type: 'filter',
              tag: document.getElementById(
                Data.navigation.filter.button.text.id
              ),
            };
          }
          if (Data.navigation.focus[1] == null)
            Data.navigation.focus[1] = { type: 'menu', tag: null };
          else
            Data.navigation.focus[1].tag.addEventListener(
              'keydown',
              ctx.navigation_keyboard,
              false
            );
          // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - AFFICHAGE DU MENU PRINCIPAL (version deployee)
          // Initialisation de l'objet de donnees temporaires pour le traitement des liens du "treeview"
          o = {};
          o.links = { all: [], level0: [], level1: [], level2: [] }; // Reference des index et balises de tous les elements du menu
          o.ismenu = { all: [], level0: [], level1: [], level2: [] }; // Reference des index des liens de type "menu"
          // Traitement de tous les liens obtenus
          m = d.links.list.all.length;
          for (i = 0; i < m; i++) {
            t = d.links.list.all[i];
            // Recuperation du lien principal (ouverture du menu ou acces au site)
            r = t.tag.getElementsByClassName('ep_button');
            t.button = r.length > 0 ? r[0] : null;
            if (t.button != null) {
              if (t.ismenu) r = t.button.getElementsByTagName('span');
              else r = t.button.getElementsByTagName('a');
              t.button = r.length > 0 ? r[0] : null;
            }
            // Stockage des informations
            o.links.all.push({
              index: o.links.all.length, // Index du lien dans la liste
              block: t.tag, // Reference a la balise du lien
              ismenu: t.ismenu, // Type de element du menu (lien direct ou sous-menu)
              level: t.level, // Niveau de profondeur du lien dans le menu de navigation
              parent: t.parent, // Index de l'element parent ("null" s'il ne fait pas partie d'un sous-menu)
              children: t.children, // Index des elements enfant
              button: t.button, // Reference a la balise servant de lien ou d'ouverture/fermeture du menu
              animtag: null, // Reference a la balise d'animation d'ouverture/fermeture de contenu
              list: null, // Reference a la balise de contenu de liens
              order: t.order, // Position de la balise dans la liste par niveau
            });
            // Sauvegarde de l'element par niveau
            o.links['level' + t.level].push(i);
            // Traitement des liens de type "menu"
            if (t.ismenu) {
              // Stockage de l'information
              o.ismenu.all.push(i);
              o.ismenu['level' + t.level].push(i);
            }
          }
          d = false;
          // Traitement des liens "menu" par niveau
          if (o.ismenu.all.length > 0) {
            d = true;
            m = o.ismenu.all.length;
            for (i = 0; i < m; i++) {
              t = o.links.all[o.ismenu.all[i]];
              // Recherche des balises utiles pour l'affichage en accordeon
              r = t.block.getElementsByTagName('ol');
              if (r.length > 0) {
                t.list = r[0];
                t.animtag = r[0].parentNode;
              }
              // Correction des liens de premier niveau
              if (t.level == 0) {
                // Recherche des balises ouvrantes et fermantes du menu a supprimer (inutile pour la gestion en "treeview")
                r = t.block.getElementsByClassName('ep_closeaccess');
                if (r.length > 0) r[0].parentNode.removeChild(r[0]);
                r = t.block.getElementsByClassName('ep_openaccess');
                if (r.length > 0) {
                  r = r[0];
                  r.classList.remove('ep_openaccess');
                  r = r.getElementsByTagName('a');
                  if (r.length > 0) {
                    r[0].parentNode.setAttribute('id', r[0].id);
                    r[0].parentNode.removeChild(r[0]);
                  }
                }
              }
              // Verification de l'acces aux balises
              if (t.button == null || t.animtag == null || t.list == null) {
                d = false;
                break;
              }
            }
          }
          // Traitement du menu
          if (o.links.all.length > 0) {
            // Sauvegarde des valeurs obtenues
            Data.navigation.links = o.links;
            Data.navigation.ismenu = o.ismenu;
            // Traitement des elements du menu selon les niveaux
            m = Data.navigation.links.all.length;
            for (i = 0; i < m; i++) {
              d = Data.navigation.links.all[i];
              // Ajout des references a la balise
              d.block.setAttribute('data-navindex', i);
              d.button.setAttribute('data-navindex', i);
              d.button.parentNode.setAttribute('data-navindex', i);
              // Ajout des parametres d'accessibilite
              d.block.removeAttribute('tabindex');
              d.button.setAttribute('tabindex', '-1');
              // Gestion du mode "menu"
              if (d.ismenu) {
                // Ajout de l'identification du bloc
                d.animtag.setAttribute('data-navindex', i);
                d.list.setAttribute('data-navindex', i);
                // Ajout des parametres de fermeture
                d.block.setAttribute('aria-expanded', false);
                // Ajout des actions d'ouverture/fermeture
                d.button.addEventListener(
                  'click',
                  ctx.navigation_expand,
                  false
                );
                d.button.addEventListener(
                  'touchend',
                  ctx.navigation_expand,
                  false
                );
                d.animtag.addEventListener(
                  'transitionend',
                  ctx.navigation_expandend,
                  false
                );
                if (d.level == 1) {
                  d.list.addEventListener(
                    'mouseover',
                    ctx.navigation_mouse,
                    false
                  );
                  d.list.addEventListener(
                    'mouseout',
                    ctx.navigation_mouse,
                    false
                  );
                }
              }
              // Gestion des actions de survol
              if (d.level <= 1) {
                d.button.parentNode.addEventListener(
                  'mouseover',
                  ctx.navigation_mouse,
                  false
                );
                d.button.addEventListener(
                  'mouseout',
                  ctx.navigation_mouse,
                  false
                );
              }
              // Gestion des actions clavier
              d.button.addEventListener(
                'keydown',
                ctx.navigation_keyboard,
                false
              );
            }
            // Autorisation d'acces au premier lien du menu (navigation clavier)
            Data.navigation.links.all[0].button.setAttribute('tabindex', '0');
            Data.navigation.selectedlink = Data.navigation.links.all[0];
            // Ajout de la fermeture du menu au survol de la page
            document.addEventListener(
              'mouseover',
              ctx.navigation_checkover,
              false
            );
            document.addEventListener(
              'touchstart',
              ctx.navigation_checkover,
              false
            );
            // Ajout du marqueur sur les balises du menu
            i = Data.navigation.links.level0.length - 1;
            for (i = i; i >= 0; i--) {
              // Identification du lien de premier niveau
              d =
                Data.navigation.links.all[Data.navigation.links.level0[i]]
                  .block;
              // Ajout du marqueur
              d.classList.add('epjs_navigationlinks');
              // Ajout du marqueur sur les balises interieures
              d = d.getElementsByTagName('*');
              m = d.length - 1;
              for (m = m; m >= 0; m--) {
                d[m].classList.add('epjs_navigationlinks');
              }
            }
          }
          // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - DEFINITION DU MODE D'AFFICHAGE SELON L'ECRAN
          // Definition du mode d'affichage du menu
          navigation_mode(Data.navigation.menuaccess.offsetWidth > 1);
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // PIED DE PAGE : Recherche des balises
      d = { footer: null, specific: null, general: null };
      t = document.getElementById('website-footer');
      if (Data.footer == null && check(t)) {
        d.footer = t;
        // Fonction temporaire du traitement des liens
        f = function(f_classparent) {
          var f_p;
          var f_t;
          var f_i;
          // Initialisation de l'objet de donnees
          var f_d = {
            parent: null,
            title: null,
            ticon: null,
            open: null,
            close: null,
            content: null,
            list: null,
          };
          // Recherche du bloc parent
          f_p = d.footer.getElementsByClassName(f_classparent);
          if (f_p.length > 0) {
            f_d.parent = f_p[0];
            // Recherche des liens d'ouverture/fermeture sans JS
            f_t = f_d.parent.getElementsByClassName('ep_menu-access');
            f_i = f_t.length - 1;
            for (f_i = f_i; f_i >= 0; f_i--) {
              if (f_t[f_i].classList.contains('ep_openaccess'))
                f_d.open = f_t[f_i];
              else if (f_t[f_i].classList.contains('ep_closeaccess'))
                f_d.close = f_t[f_i];
              if (f_d.open != null && f_d.close != null) break;
            }
            // Recherche du titre du bloc pour la convertion en lien d'ouverture/fermeture via JS
            f_t = f_d.parent.getElementsByClassName('ep_title');
            if (f_t.length > 0) {
              f_d.title = f_t[0];
            }
            // Recherche du bloc de contenu a deployer
            f_t = f_d.parent.getElementsByClassName('ep_list');
            if (f_t.length > 0) {
              f_d.content = f_t[0];
              if (f_d.content.classList.contains('ep-layout_category')) {
                f_t = f_d.content.getElementsByTagName('div');
              } else {
                f_t = f_d.content.getElementsByTagName('ul');
              }
              if (f_t.length > 0) {
                f_d.list = f_t[0];
              }
            }
          }
          // Envoi du resultat
          return check(f_d.parent) &&
            check(f_d.title) &&
            check(f_d.open) &&
            check(f_d.close) &&
            check(f_d.content) &&
            check(f_d.list)
            ? f_d
            : null;
        };
        // Analyse des liens specifiques au site
        d.specific = f('ep_websitelinks');
        // Analyse des liens generiques aux sites Europarl
        d.general = f('ep_europarllinks');
        // Verification des donnees obtenues
        if (d.general != null) {
          Data.footer = {};
          Data.footer.tabparent = d.general.parent.parentNode;
          Data.footer.specific = null;
          Data.footer.general = null;
          // Traitement de la liste de liens generiques
          // Initialisation de l'objet de donnees
          t = Accordion.convert(
            d.general.parent, // Reference du conteneur global
            d.general.title, // Reference du nouveau bouton d'ouverture [+]/[-] (conteneur global)
            d.general.content, // Reference du conteneur a animer
            d.general.list, // Reference de la liste generale des liens
            {
              openbtn: d.general.open, // Reference de la balise du bouton d'ouverture d'origine a supprimer
              closebtn: d.general.close, // Reference de la balise du bouton de fermeture d'origine a supprimer
              clickonicon: true, // Autorisation de la creation d'un bouton icone receptionant l'action de clic
            }
          );
          if (t.converted) Data.footer.general = t.data;
          // Traitement de la liste de liens specifiques
          if (Data.footer.general != null && d.specific != null) {
            // Initialisation de l'objet de donnees
            t = Accordion.convert(
              d.specific.parent, // Reference du conteneur global
              d.specific.title, // Reference du nouveau bouton d'ouverture [+]/[-] (conteneur global)
              d.specific.content, // Reference du conteneur a animer
              d.specific.list, // Reference de la liste generale des liens
              {
                openbtn: d.specific.open, // Reference de la balise du bouton d'ouverture d'origine a supprimer
                closebtn: d.specific.close, // Reference de la balise du bouton de fermeture d'origine a supprimer
                clickonicon: true, // Autorisation de la creation d'un bouton icone receptionant l'action de clic
              }
            );
            if (t.converted) {
              Data.footer.specific = t.data;
              // Ajout des dependances entre les deux blocs
              Accordion.setdependency(Data.footer.specific.index, [
                Data.footer.specific.index,
                Data.footer.general.index,
              ]);
              Accordion.setdependency(Data.footer.general.index, [
                Data.footer.specific.index,
                Data.footer.general.index,
              ]);
            }
          } else {
            Data.footer = null;
          }
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // MENU SOMMAIRE : Recherche des balises
      if (check(content)) {
        t = site.getElementsByClassName('ep-layout_tableofcontent');
        if (t.length > 0) {
          i = t.length - 1;
          for (i = i; i >= 0; i--) {
            TableOfContent.convert(t[i], null);
          }
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // BLOC DE SUIVI : Recherche des balises devant suivre le scroll de la page
      if (check(content)) {
        t = site.getElementsByClassName('ep-layout_followingscroll');
        if (t.length > 0) {
          i = t.length - 1;
          for (i = i; i >= 0; i--) {
            FollowingScroll.convert(t[i], null);
          }
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // SELECTEURS : Recherche des balises <select> a convertir en JS
      if (check(content)) {
        t = site.getElementsByTagName('select');
        if (t.length > 0) {
          i = t.length - 1;
          for (i = i; i >= 0; i--) {
            Select.convert(t[i]);
          }
        }
        t = site.getElementsByClassName('ep_fakeselect');
        if (t.length > 0) {
          i = t.length - 1;
          for (i = i; i >= 0; i--) {
            Select.convert(t[i]);
          }
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // BLOC ACCORDEON : Recherche des balises devant se convertir en accordeon dans au moins un breakpoint
      if (Data.accordions == null) Data.accordions = [];
      if (check(content)) {
        t = site.getElementsByClassName('ep-layout_accordion');
        if (t.length > 0) {
          // Lancement de la convertion des listes d'accordeon
          i = t.length - 1;
          for (i = i; i >= 0; i--) {
            if (!t[i].getAttribute('data-converted')) {
              d = { parent: t[i], index: null, items: [], initopen: -1 };
              // parent, newbutton, animatedcontent, realcontent, params
              // Recherche des molecules "enfant" a convertir
              f = {
                index: 0,
                max: 0,
                list: d.parent.getElementsByClassName('ep_gridcolumn'),
              };
              if (f.list.length > 0) {
                f.index = 0;
                f.max = f.list.length;
                for (f.index = 0; f.index < f.max; f.index++) {
                  // Acces a la molecule a convertir -> verification de la composition necessaire
                  if (
                    f.list[f.index].className.match('ep-m_') &&
                    !f.list[f.index].getAttribute('data-accordion')
                  ) {
                    r = {
                      molecule: f.list[f.index],
                      header: null, // Entete de la molecule servant de bouton d'ouverture/fermeture
                      body: null, // Corps de la molecule a animer
                      content: null, // Contenu reel de la molecule servant au calcul de la hauteur
                    };
                    // Recherche du titre servant de support au bouton d'ouverture/fermeture
                    r.header = r.molecule.getElementsByClassName(
                      'ep-layout_accordiontitle'
                    );
                    if (r.header.length > 0) r.header = r.header[0];
                    else r.header = null;
                    // Recherche du contenu reel permattant le calcul de hauteur de l'animation
                    r.content = r.molecule.getElementsByClassName(
                      'ep-layout_accordioncontent'
                    );
                    if (r.content.length > 0) r.content = r.content[0];
                    else r.content = null;
                    // Recherche du contenu a animer
                    if (r.content != null && r.header != null) {
                      r.body = r.content.parentNode;
                    }
                    // Activation de la fonctionnalite
                    if (
                      r.content != null &&
                      r.content != null &&
                      r.body != null
                    ) {
                      r = Accordion.convert(
                        r.molecule,
                        r.header,
                        r.body,
                        r.content
                      );
                      if (r.converted) {
                        // Sauvegarde de la reference
                        d.index = r.data.index;
                        d.items.push(r.data.index);
                        // Verification de la demande d'ouverture a l'initialisation
                        if (
                          f.list[f.index].getAttribute('data-accordionopened')
                        )
                          d.initopen = r.data.index;
                      }
                    }
                  }
                }
              }
              // Verification de l'autorisation de convertion d'affichage
              if (d.items.length > 0) {
                // Autorisation de l'application des effets visuels
                d.parent.setAttribute('data-converted', 'true');
                // Ajout de la dependance entre les conteneurs de meme liste
                f = { index: 0, max: d.items.length };
                for (f.index = 0; f.index < f.max; f.index++) {
                  Accordion.setdependency(d.items[f.index], d.items);
                }
                // Ouverture de l'element demande (si precise)
                if (d.initopen >= 0)
                  Accordion.open(d.initopen, true, true, true);
                // Indexation de la liste
                Data.accordions.push(d);
              }
            }
          }
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // Ajout des ecouteurs d'evenements
      if (Data.initscript) {
        if (
          Data.toolbar != null ||
          Data.navigation != null ||
          Data.search != null ||
          Data.footer != null
        ) {
          Data.initscript = false;
          // Ajout des evenements de mises a jour
          document.addEventListener('scroll', ctx.scroll, false);
          window.addEventListener('resize', ctx.refresh, false);
          // Initialisation des scripts
          ctx.refresh();
        }
      }
      // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
      // Blocage du double traitement
      if (e.type == 'load') {
        // Mise a jour du contenu
        ctx.refresh();
        // Traitement des boutons de raccourcis correspondant aux widgets afin de les adapter a leur cible suite aux adaptations JS
        if (
          wailinks != null &&
          (Data.language !== null || Data.search != null)
        ) {
          i = wailinks.length - 1;
          for (i = i; i >= 0; i--) {
            if (
              Data.language !== null &&
              wailinks[i].href.match('#language-select')
            ) {
              var languagetarget = Data.language.button.text.id;
              wailinks[i].addEventListener('click', function() {
                document.getElementById(languagetarget).focus();
                return false;
              });
            } else if (
              Data.search !== null &&
              wailinks[i].href.match('#search-field')
            ) {
              wailinks[i].classList.add('epjs_search');
              wailinks[i].addEventListener('click', ctx.searchaccessfield);
            }
          }
        }
        // Suppression des donnees du champ linguistique (plus utiles)
        Data.language = Data.language != null;
        // Enregistrement du fichier "behaviour.js" comme module "AMD"
        if (typeof define === 'function' && define.amd)
          define('behaviour.js', [], function() {});
        // Suppression de la fonction inutile
        delete this;
      }
    }
  };

  // - GESTION COMMUNE DES COMPOSANTS - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // COMPOSANTS : Mise a jour des scripts lors du changement de vue
  ctx.refresh = function(e) {
    var d;
    var i;
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    clearInterval(Data.timer);
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // Recuperation de la position du scroll selon les navigateurs
    var s = Math.max(
      document.body.scrollTop,
      document.documentElement.scrollTop
    );
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // BARRE D'OUTIL : Effet parallaxe
    if (Data.toolbar != null) {
      // Mise a jour de la hauteur de l'entete pour les calculs de positions parallaxes
      Data.toolbar.scrollsize =
        Data.toolbar.header.offsetTop + Data.toolbar.header.offsetHeight;
      // Mise a jour de l'affichage selon le scroll
      ctx.scroll(e);
    }
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // MENU "SOMMAIRE" : Correction du positionnement
    TableOfContent.refresh();
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // ELEMENT DE SUIVI : Correction du positionnement
    FollowingScroll.refresh();
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // EFFET ACCORDEON ([+]/[-]) : Verification de la demande fonctionnelle (detection faite via la presence d'une propriete css)
    if (Data.accordions.length > 0) {
      d = Data.accordions.length - 1;
      for (d = d; d >= 0; d--) {
        if (
          parseFloat(
            getComputedStyle(Data.accordions[d].parent, ':before').width
          ) > 0
        ) {
          i = Data.accordions[d].items.length - 1;
          for (i = i; i >= 0; i--) {
            Accordion.activate(Data.accordions[d].items[i]);
          }
        } else {
          i = Data.accordions[d].items.length - 1;
          for (i = i; i >= 0; i--) {
            Accordion.desactivate(Data.accordions[d].items[i]);
          }
        }
      }
    }
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // PIED DE PAGE : Effet accordeon ([+]/[-])
    if (Data.footer != null) {
      // Activation de l'effet accordeon (presence ou non des boutons d'ouverture/fermeture)
      if (Data.footer.general.iconbutton.offsetWidth > 10) {
        Accordion.activate(Data.footer.general.index);
        if (Data.footer.specific != null) {
          Accordion.activate(Data.footer.specific.index, true);
          Data.footer.tabparent.setAttribute('role', 'tablist');
          Data.footer.tabparent.setAttribute('multiselectable', 'true');
        }
      } else {
        Accordion.desactivate(Data.footer.general.index);
        if (Data.footer.specific != null)
          Accordion.desactivate(Data.footer.specific.index, true);
        Data.footer.tabparent.removeAttribute('role');
        Data.footer.tabparent.removeAttribute('multiselectable');
      }
    }
  };
  // COMPOSANTS : Mise a jour du visuel selon le scroll du navigateur (autres navigateurs)
  ctx.scroll = function(e) {
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // Recuperation de la position du scroll selon les navigateurs
    var s = Math.max(
      document.body.scrollTop,
      document.documentElement.scrollTop
    );
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // BARRE D'OUTIL : Effet parallaxe
    if (s >= Data.toolbar.scrollsize) {
      Data.toolbar.page.setAttribute('data-headerparallax', true);
      navigation_refresh();
      search_refresh();
    } else {
      Data.toolbar.page.removeAttribute('data-headerparallax');
      navigation_refresh();
      search_refresh();
    }
  };

  // - GESTION DE L'AFFICHAGE (MENU DE NAVIGATION)  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // NAVIGATION (GENERAL) : Rafraichissement du menu
  function navigation_refresh() {
    if (Data.navigation != null) {
      // Identification du type d'affichage utilise par le menu : reduit ou deploye
      if (Data.navigation.menuaccess.offsetWidth > 1) {
        if (Data.navigation.mode != 'treeview') {
          // Mise a jour du mode d'affichage du menu
          navigation_mode(true);
          // Reinitialisation des menus
          navigation_closeall();
        } else if (
          Data.navigation.menu.getAttribute('data-expanded') == 'true'
        ) {
          navigation_calculatemenu();
        }
      } else if (Data.navigation.mode == 'treeview') {
        // Mise a jour du mode d'affichage du menu
        navigation_mode(false);
        // Reinitialisation des menus
        navigation_closeall();
      }
    }
  }
  // MENU DE NAVIGATION (GENERAL) : Mise a jour de la largeur du selecteur de filtre
  function navigation_select() {
    if (Data.navigation.filter != null) {
      if (Data.navigation.filter.placeholder != null) {
        var t;
        // Ajout du placeholder pour application de sa taille
        Data.navigation.filter.dropdownlist.appendChild(
          Data.navigation.filter.placeholder
        );
        t = Data.navigation.filter.placeholder.getElementsByClassName(
          'epjs_option'
        )[0];
        // Ouverture du menu hors de la zone visible
        Data.navigation.filter.button.tag.style.width = '';
        Data.navigation.filter.dropdown.style.position = 'absolute';
        Data.navigation.filter.dropdown.style.transform =
          'translate(-9000px, 0)';
        Data.navigation.filter.container.setAttribute('data-open', 'true');
        Data.navigation.filter.placeholder.style.display = 'inline-block';
        t.removeAttribute('data-disabled');
        Data.navigation.filter.container.style.maxWidth =
          Data.navigation.filter.placeholder.offsetWidth + 60 + 'px';
        // Fermeture du menu
        Data.navigation.filter.container.removeAttribute('data-open');
        Data.navigation.filter.dropdown.style.position = '';
        Data.navigation.filter.dropdown.style.transform = '';
        Data.navigation.filter.dropdown.style.minWidth =
          Data.navigation.filter.container.offsetWidth + 'px';
        Data.navigation.filter.dropdown.style.width =
          Data.navigation.filter.container.offsetWidth + 'px';
        // Suppression du placeholder apres le calcul
        t.setAttribute('data-disabled', true);
        Data.navigation.filter.dropdownlist.removeChild(
          Data.navigation.filter.placeholder
        );
      } else {
        Data.navigation.filter.container.style.maxWidth = '';
      }
    }
  }
  // MENU DE NAVIGATION (GENERAL) : Fermeture du menu lors du clic hors du menu
  ctx.navigation_checkclick = function(e) {
    if (check(e.target)) {
      if (
        e.target.hasAttribute('class') &&
        e.target.getAttribute('class') != null &&
        e.target.getAttribute('class').indexOf('epjs_navigation') < 0
      )
        return navigation_closeall();
    }
  };
  // MENU DE NAVIGATION (GENERAL) : Modification du mode d'affichage pour l'accessibilite et la logique de navigation clavier (treeview = navigation verticale, menubar = navigation horizontale)
  function navigation_mode(treeview) {
    // Activation du mode "tree view" utilise par la version reduite et parallaxe
    if (treeview && Data.navigation.mode != 'treeview') {
      // Definition du mode
      Data.navigation.mode = 'treeview';
      Data.navigation.bar.setAttribute('role', 'tree');
      // Traitement des elements du menu (niveau 0)
      if (Data.navigation.links != null) {
        m = Data.navigation.links.level0.length;
        for (i = 0; i < m; i++) {
          d = Data.navigation.links.all[Data.navigation.links.level0[i]];
          d.block.setAttribute('role', 'treeitem');
          if (d.ismenu) d.list.setAttribute('role', 'group');
        }
        // Traitement des elements du menu (niveau 1)
        m = Data.navigation.links.level1.length;
        for (i = 0; i < m; i++) {
          d = Data.navigation.links.all[Data.navigation.links.level1[i]];
          d.block.setAttribute('role', 'treeitem');
          if (d.ismenu) d.animtag.removeAttribute('role');
        }
      }
      // Activation du mode "menu" utilise par la version deployee hors du parallaxe
    } else if (!treeview && Data.navigation.mode == 'treeview') {
      // Definition du mode
      Data.navigation.mode = 'menuview';
      Data.navigation.bar.setAttribute('role', 'menubar');
      // Mise a jour du selecteur
      navigation_select();
      // Traitement des elements du menu (niveau 0)
      if (Data.navigation.links != null) {
        m = Data.navigation.links.level0.length;
        for (i = 0; i < m; i++) {
          d = Data.navigation.links.all[Data.navigation.links.level0[i]];
          d.block.setAttribute('role', 'menuitem');
          if (d.ismenu) d.list.setAttribute('role', 'menu');
        }
        // Traitement des elements du menu (niveau 1)
        m = Data.navigation.links.level1.length;
        for (i = 0; i < m; i++) {
          d = Data.navigation.links.all[Data.navigation.links.level1[i]];
          d.block.setAttribute('role', 'menuitem');
          if (d.ismenu) d.animtag.setAttribute('role', 'tree');
        }
      }
    }
  }
  // MENU DE NAVIGATION (GENERAL) : Demande de fermeture globale du menu principal
  function navigation_closeall(target, focus) {
    var d;
    // Fermeture du menu reduit
    navigation_display(false, focus);
    // Fermeture de tous les menus du menu deploye
    if (Data.navigation.links != null) {
      var i = Data.navigation.links.all.length - 1;
      for (i = i; i >= 0; i--) {
        d = Data.navigation.links.all[i];
        if (d.ismenu) navigation_view(d, false, false);
      }
      // Analyse du bouton a cibler (focus)
      if (isNaN(target) || target == null) target = 0;
      // Activation de l'acces au bouton du menu
      d = Data.navigation.links.all[target];
      d.button.setAttribute('tabindex', 0);
      Data.navigation.selectedlink = d;
      if (focus) d.button.focus();
    }
  }
  // NAVIGATION (GENERAL) : Demande d'ouverture ou de fermeture via la navigation clavier
  ctx.navigation_keyboard = function(e, forcedaction, forcedthis) {
    // Identification de l'objet de donnees
    if (Data.navigation != null) {
      var l;
      var i;
      var m;
      var t;
      // Identification de l'objet de donnees
      t = forcedthis == null ? this : forcedthis;
      var d = Data.navigation.links.all[t.getAttribute('data-navindex')];
      // Verification de la touche choisie
      var k = null;
      if (window.event) k = event.keyCode;
      else if (e) k = e.which ? e.which : 0;
      // Analyse de l'action demandee selon le mode d'affichage
      var action = null;
      if (typeof forcedaction === 'string') {
        action = forcedaction;
      } else if (Data.navigation.mode == 'treeview') {
        switch (true) {
          case k == 56 || k == 38:
            action = 'previous';
            break; // - - -> deplacement de la selection dans le niveau 		(touche "8" ou "arrow up")
          case k == 50 || k == 40:
            action = 'next';
            break; // - - -> deplacement de la selection dans le niveau 		(touche "2" ou "arrow down")
          case k == 54 || k == 39:
            action = 'open';
            break; // - - -> ouverture du menu ferme 							(touche "6" ou "arrow right")
          case k == 52 || k == 37:
            action = 'close';
            break; // - - -> fermeture du menu ouvert 							(touche "4" ou "arrow left")
        }
      } else {
        switch (true) {
          case (k == 52 || k == 37) && d.level == 0: // - - -> deplacement de la selection dans le niveau 0		(touche "4" ou "arrow left")
          case (k == 56 || k == 38) && d.level >= 1:
            action = 'previous';
            break; // - - -> deplacement de la selection dans les niveaux > 0	(touche "8" ou "arrow up")
          case (k == 54 || k == 39) && d.level == 0: // - - -> deplacement de la selection dans le niveau 0		(touche "6" ou "arrow right")
          case (k == 50 || k == 40) && d.level >= 1:
            action = 'next';
            break; // - - -> deplacement de la selection dans les niveaux > 0	(touche "2" ou "arrow down")
          case (k == 50 || k == 40) && d.level == 0: // - - -> ouverture du menu ferme dans le niveau 0			(touche "2" ou "arrow down")
          case (k == 52 || k == 39) && d.level >= 1:
            action = 'open';
            break; // - - -> ouverture du menu ferme dans les niveaux > 0		(touche "6" ou "arrow right")
          case (k == 56 || k == 38) && d.level == 0: // - - -> fermeture du menu ouvert dans le niveau 0			(touche "8" ou "arrow up")
          case (k == 54 || k == 37) && d.level >= 1:
            action = 'close';
            break; // - - -> fermeture du menu ouvert dans les niveaux > 0		(touche "4" ou "arrow left")
        }
      }
      // Traitement de l'action demandee
      if (action == 'previous' || action == 'next') {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - -> deplacement de la selection dans le niveau
        // Identification du niveau de profondeur du bouton appelant
        l = Data.navigation.links['level' + d.level];
        // Identification de la position du bouton au sein du niveau
        i = d.order;
        // Recherche du bouton suivant pour la selection
        if (action == 'previous' && i >= 0) i--;
        else if (action == 'next' && i < l.length - 1) i++;
        if (i < 0)
          i =
            Data.navigation.mode != 'treeview' && d.level == 1
              ? d.parent
              : d.index;
        else i = l[i];
        if (i != d.index) {
          i = Data.navigation.links.all[i];
          // Verification que le niveau suivant n'est pas ouvert (mode "tree view" uniquement) pour le deplacement du focus
          if (Data.navigation.mode == 'tree view') {
            m = 0;
            while (
              i.ismenu &&
              i.block.getAttribute('aria-expanded') == 'true' &&
              m < 10
            ) {
              l = Data.navigation.links['level' + i.level];
              // Deplacement de la selection dans la liste ouverte
              if (i.ismenu && action == 'previous' && i.order > 0)
                i =
                  Data.navigation.links.all[i.children[i.children.length - 1]];
              else if (i.ismenu && action == 'next' && i.order < l.length - 1)
                i = Data.navigation.links.all[i.children[0]];
              else break;
              // Blocage des boucles infinies
              m--;
            }
            // Verification qu'on ne change pas de niveau (vers niveau superieur)
          } else if (i.level < d.level) {
            navigation_expand(i, false, false);
          }
          // Assignation du focus
          i.button.setAttribute('tabindex', 0);
          i.button.focus();
          d.button.setAttribute('tabindex', -1);
          Data.navigation.access = i;
        }
        // Blocage de l'action initiale de la touche
        e.preventDefault();
        return false;
      }
      if (action == 'open') {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -> ouverture du menu ferme
        if (d.ismenu && d.block.getAttribute('aria-expanded') !== 'true') {
          navigation_expand(d, true, true);
        }
        // Blocage de l'action initiale de la touche
        e.preventDefault();
        return false;
      }
      if (action == 'close') {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -> fermeture du menu ouvert (touche "6" ou "arrow right")
        // Identification du bouton parent
        i = Data.navigation.links.all[d.parent];
        if (
          d.level > 0 &&
          i.ismenu &&
          i.block.getAttribute('aria-expanded') == 'true'
        ) {
          navigation_expand(i, false, true);
          i.button.setAttribute('tabindex', 0);
          i.button.focus();
          d.button.setAttribute('tabindex', -1);
          Data.navigation.access = i;
        }
        // Blocage de l'action initiale de la touche
        e.preventDefault();
        return false;
      }
      if (k == 13 || k == 32) {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -> validation de la selection (touche "enter" ou "space"){
        if (d.ismenu) {
          // Ouverture/fermeture du menu
          t = this;
          ctx.navigation_keyboard(
            e,
            d.block.getAttribute('aria-expanded') !== 'true' ? 'open' : 'close',
            t
          );
          // Blocage de l'action initiale de la touche
          e.preventDefault();
          return false;
        }
        // Aucune action specifique pour l'execution du lien
        return true;
      }
      if (k == 36 || k == 35) {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -> deplacement direct de la selection dans le premier ou dernier niveau (touche "home" ou touche "end")
        i = null;
        if (
          k == 36 &&
          Data.navigation.links.all[Data.navigation.links.level0[0]] != null
        ) {
          i = Data.navigation.links.all[Data.navigation.links.level0[0]];
          if (i.ismenu && i.block.getAttribute('aria-expanded') == 'true') {
            // Assignation du dernier bouton du sous-niveau 1
            i = Data.navigation.links.all[i.children[0]];
            if (i.ismenu && i.block.getAttribute('aria-expanded') == 'true') {
              // Assignation du dernier bouton du sous-niveau 2
              i = Data.navigation.links.all[i.children[0]];
            }
          }
        } else if (
          k == 35 &&
          Data.navigation.links.all[
            Data.navigation.links.level0[
              Data.navigation.links.level0.length - 1
            ]
          ] != null
        ) {
          i =
            Data.navigation.links.all[
              Data.navigation.links.level0[
                Data.navigation.links.level0.length - 1
              ]
            ];
          if (i.ismenu && i.block.getAttribute('aria-expanded') == 'true') {
            // Assignation du dernier bouton du sous-niveau 1
            i = Data.navigation.links.all[i.children[i.children.length - 1]];
            if (i.ismenu && i.block.getAttribute('aria-expanded') == 'true') {
              // Assignation du dernier bouton du sous-niveau 2
              i = Data.navigation.links.all[i.children[i.children.length - 1]];
            }
          }
        }
        if (i != null) {
          i.button.setAttribute('tabindex', 0);
          i.button.focus();
          d.button.setAttribute('tabindex', -1);
          Data.navigation.access = i;
        }
        // Blocage de l'action initiale de la touche
        e.preventDefault();
        return false;
      }
      if (k == 27) {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -> arret du suivi (touche "escape"){
        // Deplacement du focus sur le lien de premier niveau
        if (d.level > 0) {
          m = 10;
          i = Data.navigation.links.all[d.parent];
          while (i.level > 0) {
            i = Data.navigation.links.all[i.parent];
          }
          i = i.index;
        } else {
          i = d.index;
        }
        // Fermeture integrale du menu
        navigation_closeall(i, true);
        // Blocage de l'action initiale de la touche
        e.preventDefault();
        return false;
      }
      if (k == 9) {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -> arret du suivi (touche "tab"){
        // Deplacement du focus sur le premier lien du menu
        i = Data.navigation.links.all[0];
        i.button.setAttribute('tabindex', 0);
        i.button.focus();
        d.button.setAttribute('tabindex', -1);
        Data.navigation.access = i;
        // Fermeture integrale du menu
        navigation_closeall(null, false);
        return true;
      }
      return true;
    }
    return true;
  };
  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
  // MENU DE NAVIGATION (REDUIT) : Demande d'ouverture ou de fermeture du menu principal
  function navigation_display(view, focus) {
    var w;
    var r = true;
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    clearInterval(Data.timer);
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // Verification de la validite de la demande
    if (
      String(view) !=
      Boolean(Data.navigation.menu.getAttribute('data-expanded'))
    ) {
      // Mise a jour du visuel de la page
      if (view) {
        // Calcul de la largeur de la barre de defilement du site
        document.body.style.overflow = '';
        v = document.body.offsetWidth;
        document.body.style.overflow = 'hidden';
        v =
          v < document.body.offsetWidth
            ? document.body.offsetWidth - v + 'px'
            : '';
        // Blocage de l'evenement scroll sur mobile
        document.body.addEventListener(
          'touchmove',
          ctx.navigation_scrollfollow,
          false
        );
        Data.navigation.bar.addEventListener(
          'touchstart',
          ctx.navigation_scrollevent,
          false
        );
        Data.navigation.bar.addEventListener(
          'touchend',
          ctx.navigation_scrollevent,
          false
        );
        // Sauvegarde de l'information de suivi du scroll
        Data.navigation.scrollfollow = false;
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        // Correction de l'affichage du bouton d'ouverture selon la taille de la barre de defilement
        Data.navigation.menuaccess.style.paddingRight = v;
        // Correction de l'affichage des elements de la page selon la taille de la barre de defilement
        Data.navigation.headerpage.style.paddingRight = v;
        Data.navigation.headerbar.style.paddingRight = v;
        Data.navigation.bodypage.style.paddingRight = v;
        // // http://www.jira.ep.parl.union.eu/ep-jira/browse/ENG-25978
        if (Data.navigation.footerpage) {
          Data.navigation.footerpage.style.paddingRight = v;
        }
        Data.navigation.menu.style.marginRight = '-' + v;
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        // Mise a jour de l'affichage du menu avec anim
        Data.navigation.menu.setAttribute('data-expanded', true);
        Data.navigation.anim.setAttribute('aria-hidden', false);
        Data.navigation.menuaccess.setAttribute('aria-expanded', true);
        // Mise a jour de l'affichage selon la resolution
        navigation_calculatemenu();
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        // Assignation du focus au premier element du menu
        Data.navigation.links.all[
          Data.navigation.links.level0[0]
        ].button.focus();
      } else {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        // Affichage de la barre de defilement de la page
        document.body.removeAttribute('style');
        // Deblocage de l'evenement scroll sur mobile
        document.body.removeEventListener(
          'touchmove',
          ctx.navigation_scrollfollow,
          false
        );
        Data.navigation.bar.removeEventListener(
          'touchstart',
          ctx.navigation_scrollevent,
          false
        );
        Data.navigation.bar.removeEventListener(
          'touchend',
          ctx.navigation_scrollevent,
          false
        );
        // Sauvegarde de l'information de suivi du scroll
        Data.navigation.scrollfollow = false;
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        Data.navigation.menuaccess.setAttribute('tabindex', '0');
        // Mise a jour de l'affichage du menu avec anim
        Data.navigation.menu.setAttribute('data-expanded', false);
        Data.navigation.anim.setAttribute('aria-hidden', true);
        Data.navigation.menuaccess.setAttribute('aria-expanded', false);
        // Suppression des styles ajoutes
        Data.navigation.menuaccess.removeAttribute('style');
        Data.navigation.headerpage.removeAttribute('style');
        Data.navigation.headerbar.removeAttribute('style');
        Data.navigation.bodypage.removeAttribute('style');
        // http://www.jira.ep.parl.union.eu/ep-jira/browse/ENG-25978
        Data.navigation.footerpage &&
          Data.navigation.footerpage.removeAttribute('style');
        Data.navigation.menu.removeAttribute('style');
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        // Assignation du focus au bouton de navigation
        if (focus) Data.navigation.menuaccess.focus();
      }
    }
  }
  // MENU DE NAVIGATION (REDUIT) : Calcul de la hauteur a appliquer au menu selon la resolution
  function navigation_calculatemenu() {
    var h;
    // Repositionnement du menu selon le scroll de la page
    h = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
    if (h < Data.toolbar.scrollsize) {
      document.documentElement.scrollTop = Data.toolbar.scrollsize;
      document.body.scrollTop = Data.toolbar.scrollsize;
    }
    // Calcul de la hauteur de la fenetre a assigner au menu (pour le scroll)
    h =
      window.innerHeight ||
      document.documentElement.clientHeight ||
      document.body.clientHeight;
    Data.navigation.anim.style.height = h - 45 + 'px';
    Data.navigation.anim.style.maxHeight = h - 45 + 'px';
  }
  // MENU DE NAVIGATION (REDUIT) : Demande d'ouverture ou de fermeture des menus accordeons
  function navigation_accordion(data, view, focus) {
    // Recherche de l'etat a afficher
    view =
      view === true || view === false
        ? view
        : !(data.block.getAttribute('aria-expanded') === 'true');
    // Verification du changement demande
    if (
      String(view) != data.block.getAttribute('data-expanded') &&
      data.ismenu
    ) {
      // Recuperation de la hauteur reelle des liens
      var h = navigation_accordionheight(data);
      // Calcul de la nouvelle hauteur a definir pour l'anim via CSS
      var t = !view ? 0 : h + 'px';
      // Assignation de la hauteur actuelle
      data.animtag.style.height = !view ? h + 'px' : 0;
      data.list.style.display = '';
      // Autorisation d'affichage
      data.block.setAttribute('aria-expanded', view);
      data.button.setAttribute('tabindex', view ? 0 : -1);
      if (view) Data.navigation.selectedlink = data;
      // Assignation du focus clavier
      if (focus === true && view && data.children.length > 0) {
        // Deplacement du focus sur le premier lien du menu
        h = Data.navigation.links.all[data.children[0]];
        h.button.setAttribute('tabindex', 0);
        h.button.focus();
        Data.navigation.selectedlink = h;
        // Blocage du focus sur le bouton parent
        data.button.setAttribute('tabindex', -1);
      }
      // Lancement des fermetures des panneaux enfants
      if (data.level < 2) {
        // Fermeture des panneaux enfant
        h = Data.navigation.links['level' + (data.level + 1)].length - 1;
        for (h = h; h >= 0; h--) {
          navigation_accordion(
            Data.navigation.links.all[
              Data.navigation.links['level' + (data.level + 1)][h]
            ],
            false,
            false
          );
        }
      }
      // Lancement de l'affichage anime
      setTimeout(function() {
        data.block.removeAttribute('data-noanim');
        data.animtag.style.height = t;
      }, 10);
    }
  }
  function navigation_accordionheight(data) {
    var height;
    data.animtag.style.height = 0;
    data.list.style.display = 'block';
    data.list.style.opacity = '0';
    height = data.list.offsetHeight;
    data.animtag.style.height = '';
    data.list.style.display = '';
    data.list.style.opacity = '';
    return height;
  }
  // MENU DE NAVIGATION (REDUIT) : Demande de fermeture globale du menu principal
  ctx.navigation_switch = function(e) {
    return (
      navigation_display(
        Data.navigation.menu.getAttribute('data-expanded') != 'true'
      ),
      true
    );
  };
  ctx.navigation_access = function(e) {
    // Verification de la touche choisie
    var k = null;
    if (window.event) k = event.keyCode;
    else if (e) k = e.which ? e.which : 0;
    // Validation de la demande (touche "enter" ou "space")
    if (k == 13 || k == 32) {
      ctx.navigation_switch();
      // Blocage de l'action initiale de la touche
      e.preventDefault();
      return false;
    }
    if (k == 27) {
      // Fermeture integrale du menu)
      navigation_display(false, true);
      // Blocage de l'action initiale de la touche
      e.preventDefault();
      return false;
    }
  };
  // MENU DE NAVIGATION (REDUIT) : Simulation du scroll dans le menu ouvert suite au blocage du scroll de la page
  ctx.navigation_scrollevent = function(e) {
    if (check(e.target) && Data.navigation.mode == 'treeview') {
      if (e.target.classList.contains('epjs_navigation')) {
        if (e.type.match(/start/gi)) {
          Data.navigation.scrollfollow = true;
          Data.navigation.scrolltime = new Date();
          Data.navigation.scrollY = Data.navigation.anim.scrollTop;
          Data.navigation.scrollratio =
            Data.navigation.anim.offsetHeight / e.touches[0].screenY;
          Data.navigation.cursorY = e.touches[0].clientY;
          e.preventDefault();
          return false;
        }
        var b = new Date();
        if (
          e.type.match(/end/gi) &&
          Data.navigation.scrolltime != 0 &&
          b - Data.navigation.scrolltime < 350 &&
          Data.navigation.cursorY - e.changedTouches[0].clientY < 10
        ) {
          ctx.navigation_mouse(e, null, e.target);
        }
        Data.navigation.scrollfollow = false;
        Data.navigation.scrolltime = 0;
      }
    }
  };
  ctx.navigation_scrollfollow = function(e) {
    // Traitement de la demande
    if (
      check(e.target) &&
      Data.navigation.mode == 'treeview' &&
      Data.navigation.scrollfollow
    ) {
      if (e.target.classList.contains('epjs_navigation'))
        Data.navigation.anim.scrollTop =
          Data.navigation.scrollY +
          (Data.navigation.cursorY - e.touches[0].clientY) *
            Data.navigation.scrollratio;
    }
  };
  // MENU DE NAVIGATION (REDUIT) : Demande de fermeture globale du menu principal
  ctx.navigation_expand = function(e) {
    // Identification du lien a deployer
    var b = this == window && e != null ? e.button : this;
    var d = Data.navigation.links.all[b.getAttribute('data-navindex')];
    // Verification du type d'evenement
    b = new Date();
    if (Data.navigation.scrolltime != 0 && b - Data.navigation.scrolltime > 200)
      d = null;
    // Changement de l'affichage
    if (d != null)
      navigation_accordion(
        d,
        null,
        !document.body.getAttribute('data-ismobile')
      );
  };
  // MENU DE NAVIGATION (REDUIT) : Nettoyage des styles CSS apres animation d'effet accordeon
  ctx.navigation_expandend = function(e, index) {
    // Identification de l'objet de donnees
    var data = Data.navigation.links.all[this.getAttribute('data-navindex')];
    if (data != null) {
      // Nettoyage des styles CSS de l'animation
      data.animtag.style.height = '';
      data.list.style.display = '';
      data.list.style.opacity = '';
      data.block.removeAttribute('data-callback');
      data.block.removeAttribute('data-noanim');
    }
  };
  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
  // MENU DE NAVIGATION (DEPLOYE) : Demande d'ouverture ou de fermeture des liens du menu
  function navigation_view(data, display, focus) {
    // Recherche de l'etat a afficher
    display =
      display === true || display === false
        ? display
        : !(data.block.getAttribute('aria-expanded') === 'true');
    // Verification du changement demande
    if (
      String(display) != data.block.getAttribute('data-expanded') &&
      data.ismenu
    ) {
      // Recuperation de la hauteur reelle des liens
      var h = navigation_calculatesubmenu(data);
      // Calcul de la nouvelle hauteur a definir pour l'anim via CSS
      var t = !display ? 0 : h + 'px';
      // Assignation de la hauteur actuelle
      data.animtag.style.height = !display ? h + 'px' : 0;
      data.list.style.display = '';
      // Autorisation d'affichage
      data.block.setAttribute('aria-expanded', display);
      data.button.setAttribute('tabindex', display ? 0 : -1);
      if (display) Data.navigation.selectedlink = data;
      // Assignation du focus clavier
      if (focus === true && display && data.children.length > 0) {
        // Deplacement du focus sur le premier lien du menu
        h = Data.navigation.links.all[data.children[0]];
        h.button.setAttribute('tabindex', 0);
        h.button.focus();
        Data.navigation.selectedlink = h;
        // Blocage du focus sur le bouton parent
        data.button.setAttribute('tabindex', -1);
      }
      // Lancement des fermetures des panneaux enfants
      if (data.level < 2) {
        // Fermeture des panneaux enfant
        h = Data.navigation.links['level' + (data.level + 1)].length - 1;
        for (h = h; h >= 0; h--) {
          navigation_view(
            Data.navigation.links.all[
              Data.navigation.links['level' + (data.level + 1)][h]
            ],
            false,
            false
          );
        }
      }
      // Lancement de l'affichage anime
      setTimeout(function() {
        data.block.removeAttribute('data-noanim');
        data.animtag.style.height = t;
      }, 10);
    }
  }
  ctx.navigation_hide = function(target) {
    if (Data.navigation.mode != 'treeview') navigation_closeall(target, false);
  };
  // MENU DE NAVIGATION (DEPLOYE) : Demande d'ouverture ou de fermeture via le survol de la souris
  ctx.navigation_mouse = function(e, notmenu, originalcaller) {
    var t = check(originalcaller) && !check(this) ? originalcaller : this;
    var d;
    d = notmenu
      ? Data.navigation.links.all[0]
      : Data.navigation.links.all[t.getAttribute('data-navindex')];
    // Verification de l'acces aux donnees et de l'affichage en mode "menu"
    if (Data.navigation.mode != 'treeview') {
      // Analyse de l'action a effectuer
      if (
        e.type.match(/out/gi) ||
        e.type.match(/touchend/gi) ||
        notmenu === true
      ) {
        // Arret de la fermeture automatique du menu
        clearTimeout(Data.navigation.timer);
        // Fermeture du menu
        if (d.level == 1) d = Data.navigation.links.all[d.parent].index;
        else if (d.level == 2)
          d =
            Data.navigation.links.all[
              Data.navigation.links.all[d.parent].index
            ];
        if (e.type.match(/touchend/gi)) {
          ctx.navigation_hide(d);
        } else {
          Data.navigation.timer = setTimeout(function() {
            ctx.navigation_hide(d);
          }, 500);
        }
        // Blocage de l'action initiale
        e.preventDefault();
        return false;
      }
      if (e.type.match(/over/gi) || e.type.match(/touchstart/gi)) {
        // Arret de la fermeture automatique du menu
        clearTimeout(Data.navigation.timer);
        // Identification des parents du menu a ouvrir
        var level0 = null;
        var level1 = null;
        if (d.level == 0) {
          level0 = d.index;
        }
        if (d.level == 1) {
          level0 = d.parent;
          level1 = d.index;
        }
        if (d.level == 2) {
          level0 = Data.navigation.links.all[d.parent].parent;
          level1 = d.parent;
        }
        // Fermeture des menus
        i = Data.navigation.links.level0.length - 1;
        for (i = i; i >= 0; i--) {
          if (Data.navigation.links.level0[i] != level0) {
            navigation_view(
              Data.navigation.links.all[Data.navigation.links.level0[i]],
              false,
              false
            );
          }
        }
        i = Data.navigation.links.level1.length - 1;
        for (i = i; i >= 0; i--) {
          if (Data.navigation.links.level1[i] != level1) {
            navigation_view(
              Data.navigation.links.all[Data.navigation.links.level1[i]],
              false,
              false
            );
          }
        }
        // Traitement du menu
        navigation_view(d, true, false);
        // Blocage de l'action initiale
        if (d.ismenu) {
          e.preventDefault();
          return false;
        }
      }
    } else if (e.type.match(/touchstart/gi)) {
      if (String(t.tagName).toLowerCase() != 'a') {
        e.preventDefault();
        return false;
      }
    } else if (e.type.match(/touchend/gi)) {
      t = String(t.tagName).toLowerCase() == 'span' ? t.parentNode : t;
      // Recherche du lien
      if (String(t.tagName).toLowerCase() == 'a') {
        if (t.getAttribute('target') == '_blank') {
          window.open(t.getAttribute('href'), '_blank');
        } else {
          location.assign(t.getAttribute('href'));
        }
      }
    }
  };
  // MENU DE NAVIGATION (DEPLOYE) : Fermeture du menu lors du survol hors du menu
  ctx.navigation_checkover = function(e) {
    if (check(e.target) && Data.navigation.mode != 'treeview') {
      if (!e.target.classList.contains('epjs_navigation')) {
        e.type = e.type.match(/touchstart/gi) ? 'touchend' : 'mouseout';
        ctx.navigation_mouse(
          {
            preventDefault: function() {},
            type: e.type.match(/touchstart/gi) ? 'touchend' : 'mouseout',
          },
          true
        );
      }
    } else if (
      Data.navigation.mode == 'treeview' &&
      Boolean(Data.navigation.menu.getAttribute('data-expanded') == 'true')
    ) {
      if (e.type.match('touchstart')) ctx.navigation_checkclick(e);
    }
  };
  // OUVERTURE/FERMETURE : Calcul de la hauteur du bloc de contenu pour l'animation
  function navigation_calculatesubmenu(data) {
    var height;
    data.animtag.style.height = 0;
    data.list.style.display = 'block';
    data.list.style.opacity = '0';
    height = data.list.offsetHeight;
    data.animtag.style.height = '';
    data.list.style.display = '';
    data.list.style.opacity = '';
    return height;
  }

  // - GESTION DE L'AFFICHAGE (MOTEUR DE RECHERCHE) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // MOTEUR DE RECHERCHE : Definition de l'acces au formulaire
  function search_refresh() {
    if (Data.search != null) {
      // Arret de l'ecouteur de l'etat du champ
      search_scan();
      // Mise a jour de l'etat du bouton
      ctx.search_validation();
      // Analyse de l'etat du menu : restreint ou non
      if (Data.search.access.offsetWidth > 1) {
        if (!Data.search.reducemode) {
          // Mise a jour de l'indicateur d'affichage
          Data.search.reducemode = true;
          // Verification de l'etat actuel
          var view =
            Data.search.parent.getAttribute('data-expanded') === 'true';
          // Blocage de l'effet d'animation si le menu n'est pas encore ouvert (pour bloquer l'assignation automatique du focus)
          if (!view) Data.search.parent.setAttribute('data-noanim', true);
          // Ajout des parametres de controle
          Data.search.form.setAttribute('data-expanded', view);
          Data.search.animate.setAttribute('aria-hidden', !view);
          Data.search.access.setAttribute(
            'aria-controls',
            Data.search.animate.id
          );
          Data.search.access.setAttribute('aria-expanded', view);
          Data.search.access.setAttribute('tabindex', 0);
        }
      } else if (Data.search.reducemode) {
        Data.search.reducemode = false;
        // Suppression des parametres
        Data.search.form.removeAttribute('style');
        Data.search.parent.removeAttribute('data-expanded');
        Data.search.animate.removeAttribute('aria-hidden');
        Data.search.access.removeAttribute('aria-controls');
        Data.search.access.removeAttribute('aria-expanded');
        Data.search.access.removeAttribute('tabindex');
      }
    }
  }
  // MOTEUR DE RECHERCHE : Definition de l'acces au formulaire
  ctx.search_validation = function() {
    if (Data.search != null) {
      // Mise a jour de l'etat du bouton
      if (Data.search.field.value.length === 0) {
        Data.search.button.setAttribute('disabled', 'disabled');
        return false;
      }
      Data.search.button.removeAttribute('disabled');
      return true;
    }
  };
  // MOTEUR DE RECHERCHE : Lancement de la boucle d'ecoute de l'etat du champ texte
  ctx.search_scan = function(e) {
    if (Data.search != null) {
      if (typeof e !== 'object') e = { type: '' };
      if (e.type.match('focus')) {
        Data.search.scanmode = setInterval(ctx.search_validation, 500);
      } else {
        clearInterval(Data.search.scanmode);
      }
    }
  };
  // MOTEUR DE RECHERCHE : Gestion du changement d'etat d'affichage du menu reduit
  ctx.search_display = function(e, display, nofocus) {
    if (Data.search.reducemode) {
      // Analyse de l'etat actuel du menu avant changement
      var todisplay = !Data.search.parent.getAttribute('data-open');
      if (typeof display === 'boolean') todisplay = display;
      // Changement des parametres d'accessibilite
      Data.search.access.setAttribute('aria-expanded', todisplay);
      Data.search.animate.setAttribute('aria-hidden', !todisplay);
      // Verification de la demande d'ouverture du menu
      if (todisplay) {
        // Fermeture des autres menus
        navigation_display(false, false, false);
        // Initialisation du champ texte
        Data.search.field.value = '';
        ctx.search_validation();
        // Lancement de l'affichage du menu
        Data.search.parent.removeAttribute('data-noanim');
        Data.search.parent.setAttribute('data-open', true);
        // Lancement automatique de l'acces au champ texte sur la version mobile (pas d'animation d'affichage)
        if (document.body.getAttribute('data-ismobile') && !nofocus)
          ctx.search_focus();
      } else {
        Data.search.parent.removeAttribute('data-open');
        if (nofocus) Data.search.parent.setAttribute('data-noanim', true);
      }
      // Blocage de l'action par defaut
      if (typeof e !== null) e.preventDefault();
    }
  };
  // MOTEUR DE RECHERCHE : Assignation du focus
  ctx.search_focus = function(e) {
    // Assignation du focus
    if (Data.search.parent.getAttribute('data-open')) {
      Data.search.field.focus();
    } else if (
      !document.body.getAttribute('data-ismobile') &&
      !Data.search.parent.getAttribute('data-noanim')
    ) {
      Data.search.parent.removeAttribute('data-noanim');
      Data.search.access.focus();
    } else {
      Data.search.field.blur();
    }
  };
  // MOTEUR DE RECHERCHE : Validation de l'envoi du formulaire
  ctx.search_submit = function(e) {
    clearTimeout(Data.search.timer);
    // Blocage du formulaire si le champ n'est pas correctement rempli
    if (!ctx.search_validation() && e != null) e.preventDefault();
    // Mise a jour du visuel de la page apres fermeture du champ texte
    ctx.search_display(null, false);
  };
  ctx.search_button = function(e) {
    if (
      Data.search.reducemode &&
      Data.toolbar.page.getAttribute('data-ismobile')
    ) {
      clearTimeout(Data.search.timer);
      if (e.type.toLowerCase().match('touch')) {
        if (ctx.search_validation()) Data.search.form.submit();
        e.preventDefault();
      } else if (e.type.toLowerCase().match('focus')) {
        Data.search.parent.setAttribute('data-open', true);
      } else {
        Data.search.timer = setTimeout(function() {
          Data.search.parent.removeAttribute('data-open');
        }, 50);
      }
    }
  };
  // MOTEUR DE RECHERCHE : Fermeture du menu si clic hors de la zone autorisee
  ctx.search_check = function(e) {
    if (check(e.target) && Data.search.reducemode) {
      if (
        Data.search.parent.getAttribute('data-open') &&
        !e.target.classList.contains('epjs_search')
      )
        ctx.search_display(e, false, true);
    }
  };
  // MOTEUR DE RECHERCHE : Navigation au sein du moteur de recherche
  ctx.search_key = function(e) {
    var i;
    var t;
    // Identification de la balise appelante
    var target = e.target;
    // Recherche de la touche choisie
    var k = null;
    if (window.event) k = event.keyCode;
    else if (e) k = e.which ? e.which : 0;
    if (Data.search.reducemode) {
      if (k == 9) {
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -> bouclage de la navigation dans le menu (touche "tab")
        if (
          (target == Data.search.button && !e.shiftKey) ||
          (target == Data.search.field && e.shiftKey)
        ) {
          if (target == Data.search.button) {
            Data.search.field.focus();
          } else if (!Data.search.button.getAttribute('disabled')) {
            Data.search.button.focus();
          }
          e.preventDefault();
          t = false;
        } else if (
          target == Data.search.field &&
          Data.search.button.getAttribute('disabled')
        ) {
          e.preventDefault();
          t = false;
        } else {
          t = true;
        }
        return t;
      }
      if (k == 27) {
        // - - - - - - - - - - - - - - - - - - - - - - - - -> fermeture sans selection (touche "escape")
        search_display(e, false);
        e.preventDefault();
        return false;
      }
      if (k == 50 || k == 40 || k == 13 || k == 32) {
        // - - - - - - -> Ouverture du menu (touche "2" ou "arrow down" ou "enter" ou "space")
        if (target == Data.search.access) {
          search_display(e, true);
          e.preventDefault();
          return false;
        }
      } else {
        ctx.search_validation();
        return true;
      }
    } else {
      // Verification de l'etat du texte apres touche clavier
      ctx.search_validation();
      // Autorisation de poursuite du code
      return true;
    }
  };

  // - LANCEMENT DU TRAITEMENT DE LA CLASSE JS  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  document.addEventListener('readystatechange', ctx.init);
  window.addEventListener('load', ctx.init);
})();
