var options = document.getElementById('options');

function addInput(){
    var newField = document.createElement('select');
    var newTextArea = document.createElement('input')
    newField.setAttribute('.select');
    newTextArea.setAttribute('textarea')
    options.appendChild(newField);
    options.appendChild(newTextArea);
}