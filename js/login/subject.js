(function(){
    // add Subject to database
    document.getElementById("addSubject").onclick =  () => {
        var data = {"department":getCheckedOne(),
                    "code":document.getElementById("code").value,
                    "name":document.getElementById("name").value,
                    "units":document.getElementById("units").value,
                    "prereq":document.getElementById("prereq").value};
        if(CheckInputsNotEmpty()){
            makeRequest('subjects/add_subject',JSON.stringify(data));
            // to empty edit boxes
            EmptyThisShitOut();
        }else{
            var x = document.getElementById('alert');
            x.style.display = 'block';
        }
        
    };

    (function SelectorEventHandlerAttached(){
        var departmentSelector = document.querySelectorAll('label input#deleteSubject');
        
            for(let i=0;i< departmentSelector.length ; i++){
                departmentSelector[i].addEventListener('change', () => {
                    if(departmentSelector[i].checked == true){

                        removeSubjectTable();
                        var data = {"departmentSubject":departmentSelector[i].value};

                        makeRequest('subjects/get_subjects',JSON.stringify(data),() => {
                            if(httpRequest.readyState === XMLHttpRequest.DONE){
                                if(httpRequest.status === 200){
                                    var responsedJSON = JSON.parse(httpRequest.responseText);
                                    for(let i=0;i < responsedJSON.length; i++){
                                        addSubjectsToList(responsedJSON[i].code_subject,responsedJSON[i].name_subject);
                                        // attach Events to buttons
                                    }
                                    attachedEventToButtons();
                                }else{
                                    alert('There was a problem with th request.');
                                }
                            }
                        });
                    }
                });
            }
    })();

    function makeRequest(url, data, callback_1, callback_2){
        httpRequest = new XMLHttpRequest();
        
        if(!httpRequest){
            alert('Giving up :( Cannot create an XMLHTTP instance');
            return false;
        }
        httpRequest.onreadystatechange = callback_1;
        httpRequest.onloaded =  callback_2;
        httpRequest.open('POST',url, true);
        httpRequest.setRequestHeader('Content-Type', 'application/json; charset=utf8');
        httpRequest.send(data);
    }

    function getCheckedOne(){
        var elements = document.getElementsByName("department");
        for(var i=0; i < elements.length; i++){
            if(document.getElementsByName("department")[i].checked == true){
                return document.getElementsByName("department")[i].value;
            }
        }
    }

    function CheckInputsNotEmpty(){
        if((document.getElementById("code").value 
        && document.getElementById("name").value 
        && document.getElementById("units").value)  != ""){
            return true;
        }else{
            return false;
        }
    }

    function EmptyThisShitOut(){
        var EditBox = document.querySelectorAll('input.uk-input');
        for(let i=0;i < EditBox.length; i++){
            EditBox[i].value = "";
        }
    }


    // add subjects to list 
    function addSubjectsToList(code, name){
        
        var CheckInput = document.createElement('button');
        CheckInput.className = "uk-button uk-button-primary deleteSubject";
        CheckInput.type = "button";
        CheckInput.innerHTML = "حذف المادة";

        var TableDataElement = [document.createElement('td')
        ,document.createElement('td'),document.createElement('td')];
        TableDataElement[0].appendChild(CheckInput);
        TableDataElement[1].textContent = code;
        TableDataElement[2].textContent = name;

        var TableRowElement = document.createElement('tr');
        TableRowElement.className = "rowSubject";
        TableRowElement.appendChild(TableDataElement[0]);
        TableRowElement.appendChild(TableDataElement[1]);
        TableRowElement.appendChild(TableDataElement[2]);

        var TableBodyElement = document.getElementsByTagName('tbody');
        TableBodyElement[0].appendChild(TableRowElement);
    }

    // remove All Subjects 
    function removeSubjectTable(){
        document.getElementsByTagName('tbody')[0].innerHTML = "";
    }

    function attachedEventToButtons(){
        var btn = document.getElementsByClassName('deleteSubject');
        for(let i=0; i < btn.length; i++){
            btn[i].addEventListener('click', () => {
                var subject = btn[i].parentNode.parentNode.querySelectorAll('td')[1].outerText;
                var department = document.querySelectorAll('label input#deleteSubject');

                for(let o=0; o < department.length; o++){
                    if(department[o].checked == true){
                        // remove subject section
                        var data = {"departmentDelete": department[o].value,
                        "subjectDelete": subject};

                        makeRequest('subjects/delete_subject',JSON.stringify(data));
                    }
                }
                var tBodyElement = document.getElementsByTagName('tbody')[0];
                tBodyElement.removeChild(btn[i].parentNode.parentNode);
            });
        }
    }


})();