// Generated by CoffeeScript 1.3.3
(function() {

  window.expectBarcodeScan = function(submit, expectedSerializedValue, inputTargetName, expectedInputValue, barcode, hitEnter) {
    var character, form, input, _i, _j, _len, _len1, _ref, _ref1;
    if (hitEnter == null) {
      hitEnter = true;
    }
    form = $("form:last");
    form.on("submit", function(e) {
      e.preventDefault();
      expect($("input:focus").length).toBe(1);
      if (!submit) {
        expect(true).toBe(false, "this barcode scan should not submit");
      }
      return false;
    });
    _ref = barcode.split("");
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      character = _ref[_i];
      KeyEvent.simulate(character.charCodeAt(0));
    }
    if (hitEnter) {
      KeyEvent.simulate(13, 13);
    }
    if (inputTargetName != null) {
      expect(form.find("input[name='" + inputTargetName + "']").val()).toBe(expectedInputValue);
    } else {
      _ref1 = form.find("input");
      for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
        input = _ref1[_j];
        expect($(input).val().length).toBe(0);
      }
    }
    if (expectedSerializedValue != null) {
      expect(form.serialize()).toBe(expectedSerializedValue);
    }
    form.off("submit");
    return $("*:focus").blur();
  };

}).call(this);
