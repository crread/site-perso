$(document).ready(function () {
    $('#addProjectContent').on("click", function(){
        addContentDashboard("./administration/projects" , document.getElementById("dashboardContainer"));
    });
    $('#addlanguagesContent').on("click", function(){
        addContentDashboard("./administration/languages" , document.getElementById("dashboardContainer"));
    });
    $('#addOptionsContent').on("click", function(){
        addContentDashboard("administration/options" , document.getElementById("dashboardContainer"));
    });
});
$(document).on('click', "#sendDataFormNewProject", function(){
    addNewData($('#formNewProject'));
});
$(document).on('click', "#sendDataFormNewLanguage", function(){
    addNewData($('#formNewLanguage'));
})
$(document).on('click', "#dashboardProjectAdd", function(){
    addContentDashboard("./administration/pageNewProject" , document.getElementById("dashboardProjectContent"));
});
$(document).on('click', "#dashboardProjectsList", function(){
    addContentDashboard("./administration/pageListProjects", document.getElementById("dashboardProjectContent"));
});
$(document).on("click", "#dashboardLanguageAdd", function(){
    addContentDashboard("administration/pageNewLanguage", document.getElementById('dashboardProjectContent'));
});
$(document).on("click", "#dashboardLanguagesList", function(){
    addContentDashboard("administration/pageListLanguages", document.getElementById('dashboardProjectContent'));
});
// $(document).on("click", "#", function(){
//     addOptionsContent("");
// });

addNewData = function (e) {
    let data = {};

    e.find(".toSend").each( function() {
        data[$(this).attr("name")] = $(this).val();
    });
    data = JSON.stringify(data);
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200 ){
            console.log("ok");
        }
    }
    xhttp.open("POST", e.attr("action") , true);
    xhttp.send(`${data}`);
}

addContentDashboard = function (url , e) {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            e.innerHTML = this.responseText;
            if($('#projectDescription'))
                $('#projectDescription').richText();
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}