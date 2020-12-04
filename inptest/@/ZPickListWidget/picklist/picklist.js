(function() {
    var Picklist, buildElements, destroy, generateResponse, hide, hideValuelessAvailableGroups, init, reset, setListeners, setSelectedGroupVisibility, setStartingState, setStyles, show, toggle;

    window.Picklist = {
        defaults: {
            afterChange: function() {},
            afterLoad: function() {},
            availableTitle: "Available",
            beforeChange: function() {},
            beforeLoad: function() {},
            closeBtnContent: "Close",
            color: "primary",
            defaultSort: ["asc", "asc"],
            height: "330px",
            launcherBtnContent: "<i class=\"glyphicon glyphicon-th-list\"></i>",
            modalize: false,
            modalTitle: "",
            selected: [],
            selectedTitle: "Selected",
            sortGroupsBy: "text",
            sortPicksBy: "text",
            striped: true,
            search: false
        },
        instances: {}
    };

    Picklist = (function() {
        function Picklist(element, options) {
            var ref, ref1, ref10, ref11, ref12, ref13, ref14, ref15, ref16, ref17, ref18, ref2, ref3, ref4, ref5, ref6, ref7, ref8, ref9;
            this.options = {
                selected: (ref = options.selected) != null ? ref : window.Picklist.defaults.selected,
                height: (ref1 = options.height) != null ? ref1 : window.Picklist.defaults.height,
                striped: (ref2 = options.striped) != null ? ref2 : window.Picklist.defaults.striped,
                selectedTitle: (ref3 = options.selectedTitle) != null ? ref3 : window.Picklist.defaults.selectedTitle,
                availableTitle: (ref4 = options.availableTitle) != null ? ref4 : window.Picklist.defaults.availableTitle,
                color: (ref5 = options.color) != null ? ref5 : window.Picklist.defaults.color,
                modalize: (ref6 = options.modalize) != null ? ref6 : window.Picklist.defaults.modalize,
                modalTitle: (ref7 = options.modalTitle) != null ? ref7 : window.Picklist.defaults.modalTitle,
                launcherBtnContent: (ref8 = options.launcherBtnContent) != null ? ref8 : window.Picklist.defaults.launcherBtnContent,
                closeBtnContent: (ref9 = options.closeBtnContent) != null ? ref9 : window.Picklist.defaults.closeBtnContent,
                sortDropsBy: (ref10 = options.sortDropsBy) != null ? ref10 : window.Picklist.defaults.sortDropsBy,
                sortGroupsBy: (ref11 = options.sortGroupsBy) != null ? ref11 : window.Picklist.defaults.sortGroupsBy,
                defaultSort: (ref12 = options.defaultSort) != null ? ref12 : window.Picklist.defaults.defaultSort,
                beforeChange: (ref13 = options.beforeChange) != null ? ref13 : window.Picklist.defaults.beforeChange,
                afterChange: (ref14 = options.afterChange) != null ? ref14 : window.Picklist.defaults.afterChange,
                beforeLoad: (ref15 = options.beforeLoad) != null ? ref15 : window.Picklist.defaults.beforeLoad,
                afterLoad: (ref16 = options.afterLoad) != null ? ref16 : window.Picklist.defaults.afterLoad,
                search: (ref17 = options.search) != null ? ref17 : window.Picklist.defaults.search
            };
            this.element = $(element)[0];
            this.element.PicklistID = (ref18 = this.element.id) != null ? ref18 : kula.guid();
            this.element.OriginalParent = $(element).parent();
            this.id = "picklist-" + this.element.PicklistID;
            this.show = function() {
                return show.call(this);
            };
            this.hide = function() {
                return hide.call(this);
            };
            this.toggle = function() {
                return toggle.call(this);
            };
            this.reset = function() {
                return reset.call(this);
            };
            this.destroy = function() {
                return destroy.call(this);
            };
            this.options.beforeLoad.call(this.element, generateResponse.call(this));
            buildElements.call(this);
            setStyles.call(this);
            setListeners.call(this);
            setStartingState.call(this);
            this.options.afterLoad.call(this.element, generateResponse.call(this));
        }

        return Picklist;

    })();

    buildElements = function() {
        var group, groups, i, optgroups, option, pickElements, values;
        $(this.element).hide().prop("multiple", true);
        optgroups = $(this.element).children("optgroup");
        if (optgroups.length > 0) {
            groups = ((function() {
                var j, len, results;
                results = [];
                for (i = j = 0, len = optgroups.length; j < len; i = ++j) {
                    group = optgroups[i];
                    results.push("<div data-pick-group='" + i + "' data-optgroup-label='" + group.label + "'> <h6>" + group.label + "</h6> </div>");
                }
                return results;
            })()).join("");
            values = ((function() {
                var j, len, results;
                results = [];
                for (i = j = 0, len = optgroups.length; j < len; i = ++j) {
                    group = optgroups[i];
                    results.push("<div data-pick-group='" + i + "' data-optgroup-label='" + group.label + "'> <h6>" + group.label + "</h6> " + (((function() {
                        var k, len1, ref, results1;
                        ref = $(group).children();
                        results1 = [];
                        for (k = 0, len1 = ref.length; k < len1; k++) {
                            option = ref[k];
                            results1.push("<div data-pick-value='" + option.value + "'>" + option.innerText + "</div>");
                        }
                        return results1;
                    })()).join("")) + " </div>");
                }
                return results;
            })()).join("");
        } else {
            values = ((function() {
                var j, len, ref, results;
                ref = $(this.element).children();
                results = [];
                for (j = 0, len = ref.length; j < len; j++) {
                    option = ref[j];
                    results.push("<div data-pick-value='" + option.value + "'>" + option.innerText + "</div>");
                }
                return results;
            }).call(this)).join("");
        }
        pickElements = "<div class='row picklist' id='" + this.id + "'> <div class='col-sm-5'> <div class='panel panel-" + this.options.color + " pl-selected'> <div class='panel-heading panel-title'> <div class='row'> <div class='col-xs-10'> " + this.options.selectedTitle + "<span class='badge'></span> </div> <div class='col-xs-2 text-right'> <i class='glyphicon glyphicon-sort-by-attributes'></i> </div> </div> </div> <div class='panel-body'>" + (groups === void 0 ? "" : groups) + "</div> " + (this.options.search ? "<div class='panel-footer'><input type='search' class='pl-search-selected form-control input-sm' autocomplete='off' placeholder='Search...'></div>" : "") + " </div> </div> <div class='col-sm-2 text-center'> <i class='glyphicon glyphicon-transfer'></i> </div> <div class='col-sm-5'> <div class='panel panel-" + this.options.color + " pl-available'> <div class='panel-heading panel-title'> <div class='row'> <div class='col-xs-10'> " + this.options.availableTitle + "<span class='badge'></span> </div> <div class='col-xs-2 text-right'> <i class='glyphicon glyphicon-sort-by-attributes'></i> </div> </div> </div> <div class='panel-body'> " + values + " </div> " + (this.options.search ? "<div class='panel-footer'><input type='search' class='pl-search-available form-control input-sm' autocomplete='off' placeholder='Search...'></div>" : "") + " </div> </div>";
        if (this.options.modalize) {
            $(this.element).before("<div class='input-group' data-picklist-launcher-for='" + this.id + "'> <i class='form-control'>&nbsp;</i> <span class='input-group-btn'> <button type='button' class='btn btn-default' data-toggle='modal' data-target='" + this.id + "-modal'>" + this.options.launcherBtnContent + "</button> </span> </div>");
            $(this.element).after("<div class='modal fade' id='" + this.id + "-modal' role='dialog'> <div class='modal-dialog modal-lg'> <div class='modal-content'> <div class='modal-header'> <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>x</button> <h4 class='modal-title'>" + this.options.modalTitle + "</h4> </div> <div class='modal-body'> " + pickElements + " </div> <div class='modal-footer'> <button type='button' class='btn btn-default' data-dismiss='modal'>" + this.options.closeBtnContent + "</button> </div> </div> </div> </div>");
        } else {
            $(this.element).after(pickElements);
        }
        return $("#" + this.id).prepend(this.element);
    };

    generateResponse = function() {
        var response, val, values;
        response = {
            selected: []
        };
        values = $("#" + this.id + " > select").val();
        if (values != null) {
            response.selected = (function() {
                var j, len, results;
                results = [];
                for (j = 0, len = values.length; j < len; j++) {
                    val = values[j];
                    results.push({
                        value: val,
                        text: $("#" + this.id + " [data-pick-value='" + val + "']").text()
                    });
                }
                return results;
            }).call(this);
        }
        return response;
    };

    hideValuelessAvailableGroups = function() {
        return $("#" + this.id + " .pl-available [data-pick-group]").each(function() {
            if ($(this).children("[data-pick-value]").length === 0) {
                return $(this).hide();
            } else {
                return $(this).show();
            }
        });
    };

    init = function(options) {
        var instance;
        if (options == null) {
            options = {};
        }
        if (this.PicklistID != null) {
            return window.Picklist.instances[this.PicklistID];
        } else {
            instance = new Picklist(this, options);
            window.Picklist.instances[instance.element.PicklistID] = instance;
            return instance;
        }
    };

    $.fn.extend({
        picklist: init
    });

    setListeners = function() {
        var picklistObj, setBadgeCounts, sortAvailable, sortSelected, triggerSearch, updateLauncher, updateSelectValue;
        picklistObj = this;
        setBadgeCounts = function() {
            $("#" + picklistObj.id + " .pl-selected .badge").text($("#" + picklistObj.id + " .pl-selected [data-pick-value]").length);
            return $("#" + picklistObj.id + " .pl-available .badge").text($("#" + picklistObj.id + " .pl-available [data-pick-value]").length);
        };
        triggerSearch = function() {
            if (picklistObj.options.search) {
                return $("#" + picklistObj.id + " .pl-search-available, #" + picklistObj.id + " .pl-search-selected").change();
            }
        };
        sortAvailable = function() {
            var order;
            order = $("#" + picklistObj.id + " .pl-available .panel-heading.panel-title").attr("data-sort-order");
            kula.sortElements($("#" + picklistObj.id + " .pl-available [data-pick-group]"), picklistObj.options.sortGroupsBy, order);
            return kula.sortElements($("#" + picklistObj.id + " .pl-available [data-pick-value]"), picklistObj.options.sortPicksBy, order);
        };
        sortSelected = function() {
            var order;
            order = $("#" + picklistObj.id + " .pl-selected .panel-heading.panel-title").attr("data-sort-order");
            kula.sortElements($("#" + picklistObj.id + " .pl-selected [data-pick-group]"), picklistObj.options.sortGroupsBy, order);
            return kula.sortElements($("#" + picklistObj.id + " .pl-selected [data-pick-value]"), picklistObj.options.sortPicksBy, order);
        };
        updateLauncher = function() {
            $("[data-picklist-launcher-for='" + picklistObj.id + "'] > i.form-control").html((function() {
                var pick, res;
                res = generateResponse.call(picklistObj);
                if (res.selected.length === 0) {
                    return "&nbsp;";
                }
                return (function() {
                    var j, len, ref, results;
                    ref = res.selected;
                    results = [];
                    for (j = 0, len = ref.length; j < len; j++) {
                        pick = ref[j];
                        results.push("<div>" + pick.text + "</div>");
                    }
                    return results;
                })();
            })());
            return kula.sortElements($("[data-picklist-launcher-for='" + picklistObj.id + "'] > i.form-control").children(), "text", "asc");
        };
        updateSelectValue = function() {
            var pick;
            return $("#" + picklistObj.id + " select").val((function() {
                var j, len, ref, results;
                ref = $("#" + picklistObj.id + " .pl-selected [data-pick-value]");
                results = [];
                for (j = 0, len = ref.length; j < len; j++) {
                    pick = ref[j];
                    results.push($(pick).attr("data-pick-value"));
                }
                return results;
            })()).blur();
        };
        $("#" + this.id + " .panel-heading.panel-title").attr("data-sort-order", "asc").click(function() {
            var glyph;
            glyph = $(this).children().children().children('.glyphicon');
            if ($(this).attr("data-sort-order") === "asc") {
                $(this).attr("data-sort-order", "desc");
                glyph.removeClass("glyphicon-sort-by-attributes").addClass("glyphicon-sort-by-attributes-alt");
                if ($(this).siblings(".panel-body").children("[data-pick-group]").length > 0) {
                    kula.sortElements($(this).siblings(".panel-body").children("[data-pick-group]"), picklistObj.options.sortGroupsBy, "desc");
                    kula.sortElements($(this).siblings(".panel-body").children("[data-pick-group]").children("[data-pick-value]"), picklistObj.options.sortPicksBy, "desc");
                } else {
                    kula.sortElements($(this).siblings(".panel-body").children("[data-pick-value]"), picklistObj.options.sortPicksBy, "desc");
                }
            } else {
                $(this).attr("data-sort-order", "asc");
                glyph.removeClass("glyphicon-sort-by-attributes-alt").addClass("glyphicon-sort-by-attributes");
                if ($(this).siblings(".panel-body").children("[data-pick-group]").length > 0) {
                    kula.sortElements($(this).siblings(".panel-body").children("[data-pick-group]"), picklistObj.options.sortGroupsBy, "asc");
                    kula.sortElements($(this).siblings(".panel-body").children("[data-pick-group]").children("[data-pick-value]"), picklistObj.options.sortPicksBy, "asc");
                } else {
                    kula.sortElements($(this).siblings(".panel-body").children("[data-pick-value]"), picklistObj.options.sortPicksBy, "asc");
                }
            }
            return setStyles.call(picklistObj, true);
        });
        $("#" + this.id + " [data-pick-value]").click(function() {
            picklistObj.options.beforeChange.call(picklistObj.element, generateResponse.call(picklistObj));
            if ($("#" + picklistObj.id + " [data-pick-group]").length > 0) {
                if ($(this).parent().parent().parent().hasClass("pl-selected")) {
                    $("#" + picklistObj.id + " .pl-available [data-pick-group='" + ($(this).parent().attr("data-pick-group")) + "']").append($(this));
                } else {
                    $("#" + picklistObj.id + " .pl-selected [data-pick-group='" + ($(this).parent().attr("data-pick-group")) + "']").append($(this));
                }
            } else {
                if ($(this).parent().parent().hasClass("pl-selected")) {
                    $("#" + picklistObj.id + " .pl-available .panel-body").append($(this));
                } else {
                    $("#" + picklistObj.id + " .pl-selected .panel-body").append($(this));
                }
            }
            setBadgeCounts();
            updateSelectValue();
            updateLauncher();
            if ($(this).parent().parent().parent().hasClass("pl-available")) {
                sortAvailable();
            } else {
                sortSelected();
            }
            setStyles.call(picklistObj, true);
            triggerSearch();
            setSelectedGroupVisibility.call(picklistObj);
            return picklistObj.options.afterChange.call(picklistObj.element, generateResponse.call(picklistObj));
        });
        $("#" + this.id + " [data-pick-group] h6").click(function() {
            picklistObj.options.beforeChange.call(picklistObj.element, generateResponse.call(picklistObj));
            kula.sortElements($("[data-picklist-launcher-for='" + picklistObj.id + "'] > i.form-control").children(), "text", "asc");
            if ($(this).parent().parent().parent().hasClass("pl-selected")) {
                $(this).siblings().each(function() {
                    return $("#" + picklistObj.id + " .pl-available [data-pick-group='" + ($(this).parent().attr("data-pick-group")) + "']").append($(this));
                });
                sortAvailable();
            } else {
                $(this).siblings().each(function() {
                    return $("#" + picklistObj.id + " .pl-selected [data-pick-group='" + ($(this).parent().attr("data-pick-group")) + "']").append($(this));
                });
                sortSelected();
            }
            setBadgeCounts();
            updateSelectValue();
            updateLauncher();
            setStyles.call(picklistObj, true);
            triggerSearch();
            setSelectedGroupVisibility.call(picklistObj);
            return picklistObj.options.afterChange.call(picklistObj.element, generateResponse.call(picklistObj));
        });
        $("[data-picklist-launcher-for='" + this.id + "'] > *").click(function() {
            return $("#" + picklistObj.id + "-modal").modal("show");
        });
        return ["available", "selected"].forEach(function(item) {
            return $("#" + picklistObj.id + " .pl-search-" + item).on("keyup change", function() {
                var query;
                query = this.value.toLowerCase();
                $("#" + picklistObj.id + " .pl-" + item + " [data-pick-value]").each(function() {
                    if ($(this).text().toLowerCase().indexOf(query) === -1 && query.length > 0) {
                        return $(this).hide();
                    } else {
                        return $(this).show();
                    }
                });
                return $("#" + picklistObj.id + " .pl-" + item + " [data-pick-group]").each(function() {
                    var hiddenChildren, totalChildren;
                    totalChildren = $(this).children("[data-pick-value]").length;
                    hiddenChildren = 0;
                    $(this).children("[data-pick-value]").each(function() {
                        if ($(this).attr("style").indexOf("display: none") > -1) {
                            return hiddenChildren++;
                        }
                    });
                    if (hiddenChildren === totalChildren) {
                        return $(this).hide();
                    } else {
                        return $(this).show();
                    }
                });
            });
        });
    };

    setSelectedGroupVisibility = function() {
        return $("#" + this.id + " .pl-selected [data-pick-group]").each(function() {
            var hiddenChildren, totalChildren;
            totalChildren = $(this).children("[data-pick-value]").length;
            hiddenChildren = 0;
            $(this).children("[data-pick-value]").each(function() {
                if ($(this).attr("style").indexOf("display: none") > -1) {
                    return hiddenChildren++;
                }
            });
            if (hiddenChildren === totalChildren) {
                return $(this).hide();
            } else {
                return $(this).show();
            }
        });
    };

    setStartingState = function() {
        var j, len, ref, selection;
        $("#" + this.id + " .pl-selected .badge").text("0");
        $("#" + this.id + " .pl-available .badge").text($("#" + this.id + " .pl-available [data-pick-value]").length);
        ref = this.options.selected;
        for (j = 0, len = ref.length; j < len; j++) {
            selection = ref[j];
            $("#" + this.id + " .pl-available [data-pick-value='" + selection + "']").click();
        }
        if (this.options.defaultSort[0] === "desc") {
            $("#" + this.id + " .pl-selected .panel-heading.panel-title").click();
        } else {
            $("#" + this.id + " .pl-selected .panel-heading.panel-title").click().click();
        }
        if (this.options.defaultSort[1] === "desc") {
            $("#" + this.id + " .pl-available .panel-heading.panel-title").click();
        } else {
            $("#" + this.id + " .pl-available .panel-heading.panel-title").click().click();
        }
        setSelectedGroupVisibility.call(this);
        return hideValuelessAvailableGroups.call(this);
    };

    setStyles = function(reset) {
        var panelBorderRadius, panelColor, picklistObj, stripeColor, xs;
        if (reset == null) {
            reset = false;
        }
        stripeColor = kula.getStyle("table.table.table-striped tbody tr", "background-color");
        panelBorderRadius = kula.getStyle(".panel.panel-default", "border-bottom-left-radius");
        panelColor = kula.getStyle(".panel.panel-" + this.options.color + " .panel-heading.panel-title", "background-color");
        $("#" + this.id + " > *").css({
            "user-select": "none",
            "cursor": "default"
        });
        $("#" + this.id + " .panel").css({
            "margin-bottom": "0px"
        });
        $("#" + this.id + " .panel-heading.panel-title").css({
            "font-size": "1em",
            "transition": "background-color 0.4s, box-shadow 0.3s",
            "cursor": "pointer"
        });
        $("#" + this.id + " .panel-body").css({
            "padding": "0px",
            "overflow-x": "none",
            "overflow-y": "auto",
            "border-radius": "0px 0px " + panelBorderRadius + " " + panelBorderRadius
        });
        $("#" + this.id + " .panel-footer").css({
            "border-top": "1px solid " + (kula.darken(stripeColor, 10)),
            "padding": "3px 15px 6px"
        });
        $("#" + this.id + " .glyphicon-transfer").css({
            "font-size": "1.8em",
            "padding-bottom": window.innerWidth < 768 ? 15 : Math.round(parseFloat(this.options.height) / 2)
        });
        $("#" + this.id + " [data-pick-group] h6").css({
            "margin": "0px",
            "padding": "8px 15px",
            "background-color": kula.darken(stripeColor, 10),
            "border-top": "1px solid " + (kula.darken(stripeColor, 15)),
            "border-bottom": "1px solid " + (kula.darken(stripeColor, 15)),
            "cursor": "pointer"
        });
        $("#" + this.id + " [data-pick-value]").css({
            "margin": "0px",
            "padding": "5px 15px",
            "cursor": "pointer",
            "background-color": $("body").css("background-color")
        });
        if (this.options.striped) {
            if ($("#" + this.id + " [data-pick-group]").length > 0) {
                $("#" + this.id + " [data-pick-value]:nth-child(even)").css({
                    "background-color": kula.darken(stripeColor, 1.5)
                });
            } else {
                $("#" + this.id + " [data-pick-value]:nth-child(odd)").css({
                    "background-color": kula.darken(stripeColor, 1.5)
                });
            }
        }
        $("#" + this.id + " [data-pick-group] [data-pick-value]").css({
            "padding": "5px 30px"
        });
        $("#" + this.id + " .badge").css({
            "margin-left": "5px",
            "margin-top": "-2px"
        });
        $("[data-picklist-launcher-for='" + this.id + "'] .input-group-btn").css({
            "vertical-align": "top"
        });
        $("[data-picklist-launcher-for='" + this.id + "'] i.form-control").css({
            "height": "auto",
            "max-height": "100px",
            "overflow-y": "auto",
            "cursor": "pointer"
        });
        $("[data-picklist-launcher-for='#" + this.id + "'] i.form-control > div").css({
            "user-select": "none"
        });
        xs = function() {
            var transferPadding;
            if (window.innerWidth < 768) {
                $("#" + this.id + " .glyphicon-transfer").css({
                    "transform": "rotate(90deg)",
                    "padding-top": "15px",
                    "padding-bottom": "15px"
                });
                $("#" + this.id + " .panel-body").css({
                    "height": "230px"
                });
                return $("#" + this.id + " > .col-sm-2, #" + this.id + " > .col-sm-5").css({
                    "width": "100%"
                });
            } else {
                $("#" + this.id + " .panel-body").css({
                    "height": this.options.height
                });
                transferPadding = Math.round(parseFloat(this.options.height) / 2);
                $("#" + this.id + " .glyphicon-transfer").css({
                    "transform": "rotateX(180deg)",
                    "padding-bottom": transferPadding
                });
                $("#" + this.id + " > .col-sm-2").css({
                    "width": "8.66666667%"
                });
                return $("#" + this.id + " > .col-sm-5").css({
                    "width": "45.66666667%"
                });
            }
        };
        if (!reset) {
            $("#" + this.id + " .panel-heading.panel-title").mouseover(function() {
                return $(this).css({
                    "box-shadow": "0 0 40px 40px rgba(0,0,0,0.1) inset"
                });
            }).mouseout(function() {
                return $(this).css({
                    'box-shadow': "0 0 40px 40px rgba(0,0,0,0) inset"
                });
            });
            picklistObj = this;
            $(window).on("resize", function() {
                return xs.call(picklistObj);
            });
            $(window).on("load", function() {
                return xs.call(picklistObj);
            });
        }
        return xs.call(this);
    };

    destroy = function() {
        this.element.OriginalParent.prepend(this.element);
        $(this.element).show();
        $("#" + this.id + ", #" + this.id + "-modal, [data-picklist-launcher-for='" + this.id + "']").remove();
        delete window.Picklist.instances["" + this.element.PicklistID];
        return this.element;
    };

    hide = function() {
        return $("#" + this.id + "-modal").modal("hide");
    };

    reset = function() {
        $("#" + this.id + " .pl-selected [data-pick-value]").click();
        return setStartingState.call(this);
    };

    show = function() {
        return $("#" + this.id + "-modal").modal("show");
    };

    toggle = function() {
        return $("#" + this.id + "-modal").modal("toggle");
    };

}).call(this);
