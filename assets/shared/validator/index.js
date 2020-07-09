
function validate(reqData, data, cb) {
    const errors = []
    reqData.map((el)=>{
        const value = data[el.name];
        let objValue = el.value;
        // console.log(el.name, value)

        value && value.req && (!el.value || !objValue)&&errors.push({key:el.name,value:`${el.name.split('_')[0]} is required`});
      
        value &&value.alpha && objValue && !objValue.match(/^[a-zA-Z]+$/)
            && errors.push({key:el.name,value:`${el.name} should be alphabetic`});
      
        value && value.bool && objValue && !objValue.match(/^(true|false)$/)
            && errors.push({key:el.name,value:`${el.name} should be either true or false`});
      
          value && value.alphaNum && objValue && !objValue.match(/^[a-zA-Z0-9]*$/)
            && errors.push({key:el.name,value:`${el.name} should be alphanumeric`});
      
          value && value.num && objValue && !objValue.match(/^[0-9]+$/)
            && errors.push({key:el.name,value:`${el.name} should be an integer`});
      
          value &&value.min && objValue && objValue.length < value.min
            && errors.push({key:el.name,value:`${el.name} should be greater than ${value.min - 1}`});
      
          value && value.max && objValue && objValue.length > value.max
            && errors.push({key:el.name,value:`${el.name} should be less than ${value.max}`});

        value && value.maxInt && objValue && JSON.parse(objValue) > value.maxInt
            && errors.push({key:el.name,value:value.discount_type === 'percentage'?`${el.name} should be less than ${value.maxInt}%`:`${el.name} should be less than the price`});
      
          value && value.email
          && objValue
          && !objValue.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          )
            && errors.push({key:el.name,value:`Invalid ${el.name} address`});
      
          value &&value.confirm && objValue && !value.confirm.match(objValue)
            && errors.push({key:el.name,value:`${el.name} provided do not match`});
    })
    if (errors) {
        return cb(errors);
    }
}

