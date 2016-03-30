$(document).ready(function () {
    if($("#grid").length > 0){
        new GridScrollFx( document.getElementById( 'grid' ), {
            viewportFactor : 0.4
        } );
    }
})