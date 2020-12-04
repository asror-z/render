Vvveb.ComponentsGroup['New Widgets'] = ['components/search'];

Vvveb.Components.add('components/search', {
  name: 'ZTextAreaWidget',
  classes: ['component_search'],
  image: 'icons/text_area.svg',
  html: '<textarea class="md-textarea form-control" rows="1" id="{id}" name="name" value="value" placeholder="placeholder">{value}</textarea>',
  properties: [
    {
      name: 'Type',
      key: 'type',
      htmlAttr: 'class',
      inputtype: SelectInput,
      validValues: ['btn-default', 'btn-primary', 'btn-info', 'btn-success', 'btn-warning', 'btn-info', 'btn-light', 'btn-dark', 'btn-outline-primary', 'btn-outline-info', 'btn-outline-success', 'btn-outline-warning', 'btn-outline-info', 'btn-outline-light', 'btn-outline-dark', 'btn-link'],
      data: {
        options: [{
          value: 'btn-default',
          text: 'Default',
        }, {
          value: 'btn-primary',
          text: 'Primary',
        }, {
          value: 'btn btn-info',
          text: 'Info',
        }, {
          value: 'btn-success',
          text: 'Success',
        }, {
          value: 'btn-warning',
          text: 'Warning',
        }, {
          value: 'btn-info',
          text: 'Info',
        }, {
          value: 'btn-light',
          text: 'Light',
        }, {
          value: 'btn-dark',
          text: 'Dark',
        }, {
          value: 'btn-outline-primary',
          text: 'Primary outline',
        }, {
          value: 'btn btn-outline-info',
          text: 'Info outline',
        }, {
          value: 'btn-outline-success',
          text: 'Success outline',
        }, {
          value: 'btn-outline-warning',
          text: 'Warning outline',
        }, {
          value: 'btn-outline-info',
          text: 'Info outline',
        }, {
          value: 'btn-outline-light',
          text: 'Light outline',
        }, {
          value: 'btn-outline-dark',
          text: 'Dark outline',
        }, {
          value: 'btn-link',
          text: 'Link',
        }],
      },
    }],
});