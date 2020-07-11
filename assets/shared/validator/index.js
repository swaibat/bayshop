const errors = []
function validate(reqData, cb) {
  reqData.map(({ name, value }) => {
    const field = $(`[name="${name}"]`);

    const minLen = field.attr('minlength') && JSON.parse(field.attr('minlength'));
    const maxLen = field.attr('maxlength') && JSON.parse(field.attr('maxlength'));
    // const min = field.attr('min') && JSON.parse(field.attr('min').trim());
    const max = field.attr('max') && JSON.parse(field.attr('max'));
    field.attr('required') && !value && $(`#${name}`).after(showError(`${name} is required`));
    value && minLen > value.length && $(`#${name}`).after(showError(`${name} is too short (${minLen} minimum)`));
    value && maxLen < value.length && $(`#${name}`).after(showError(`${name} is too long (${maxLen} maximum)`));
    // value && min > value && $(`#${name}`).after(showError(`${name} is less (${min} minimum)`));
    value && max < value && $(`#${name}`).after(showError(`${name} is much try (${max} maximum)`));
  })
  if (errors) return cb(errors);
  
}

function showError(error) {
  errors.push(error);
  return `<small class="form-text text-danger">${error}</small>`;
};
