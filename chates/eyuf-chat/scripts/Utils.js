window.Utils = {
  deepEquals(value1, value2) {
    return JSON.stringify(value1) === JSON.stringify(value2);
  },

  deepClone(value) {
    return JSON.parse(JSON.stringify(value));
  },

  get(object, path) {
    return path.split('.').reduce((result, field) => result[field], object);
  },

  dom: {
    findParentElement($element, predicate) {
      let $nextParent = $element.parentElement;

      while ($nextParent && !predicate($nextParent)) {
        $nextParent = $nextParent.parentElement;
      }

      return $nextParent;
    },
  },
};
