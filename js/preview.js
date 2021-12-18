//CHANGE PREVIEW

document.querySelector('#nav-tab').addEventListener('click', function(e) {
    console.log(e.target.id);
    if (e.target.id == "nav-person-tab") {
        document.getElementById('profilPreview').className = 'activePreview';
    } else {
        document.getElementById('profilPreview').className = 'unActivePreview';
    }
    if (e.target.id == "nav-competence-tab") {
        document.getElementById('competencePreview').className = 'activePreview';
    } else {
        document.getElementById('competencePreview').className = 'unActivePreview';
    }
    if (e.target.id == "nav-langue-tab") {
        document.getElementById('languagePreview').className = 'activePreview';
    } else {
        document.getElementById('languagePreview').className = 'unActivePreview';
    }
    if (e.target.id == "nav-school-tab") {
        document.getElementById('academicPreview').className = 'activePreview';
    } else {
        document.getElementById('academicPreview').className = 'unActivePreview';
    }
    if (e.target.id == "nav-prof-tab") {
        document.getElementById('professionnalPreview').className = 'activePreview';
    } else {
        document.getElementById('professionnalPreview').className = 'unActivePreview';
    }
    if (e.target.id == "nav-pleasure-tab") {
        document.getElementById('pleasurePreview').className = 'activePreview';
    } else {
        document.getElementById('pleasurePreview').className = 'unActivePreview';
    }

})



//LOCALISATION
function geoFindMe() {

    const status = document.querySelector('#longitude');
    const mapLink = document.querySelector('#map-link');
    const longField = document.querySelector('#champLongitude');

    mapLink.href = '';
    mapLink.textContent = '';

    function success(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        status.textContent = 'Votre position actuelle';
        mapLink.src = 'https://maps.google.com/maps?q=' + latitude + ',' + longitude + '&t=&z=13&ie=UTF8&iwloc=&output=embed';
        // mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
        longField.value = ` ${latitude} , ${longitude} `;
    }

    function error() {
        status.textContent = 'Nous ne parvenons pas à vous localiser';
    }

    if (!navigator.geolocation) {
        status.textContent = 'Votre navigateur ne supporte pas la geolocalisation';
    } else {
        status.textContent = 'Localisation…';
        navigator.geolocation.getCurrentPosition(success, error);
    }

}

document.querySelector('#locationButton').addEventListener('click', geoFindMe);





function chargeProfil(input) {
    var url = input.value;
    // var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files || input.files[0]) {
        var reader = new FileReader();
        document.getElementById("labelProfil").className = "smallImagePicker";
        document.getElementById("previewProfilImage").className = "previewProfilImage";
        reader.onload = function(e) {
            $('#previewProfilImage').attr('src', e.target.result);
            $("#fullPreviewProfilPicture").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);

    } else {
        $('#previewProfilImage').attr('src', '../image/error_30px.png');
    }
}

function chargeCouverture(input) {
    document.getElementById("labelCouverture").className = "smallImagePicker";
    document.getElementById("previewCoverImage").className = "previewProfilImage";
    var url = input.value;
    // var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files || input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#previewCoverImage').attr('src', e.target.result);
            document.getElementById("backgroundPhoto").style.backgroundImage = "url('" + e.target.result + "')";
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        $('#previewCoverImage').attr('src', '../image/error_30px.png');
    }
}


//sort
$(function() {
    $("#sortable").sortable();
});