const matches = (obj,source) => Object.keys(source).every(key => obj.hasOwnProperty(key) && obj[key] === source[key]);
console.log(matches({yoye:21,hair:'black',glasses:true},{hair:'black',glasses:true}));
console.log(matches({mint:21,hair:'black',glasses:false},{yoye:21,hair:'black',glasses:true}));