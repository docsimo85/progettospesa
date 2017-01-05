$(document).ready(function () {
    $('#aggiungi-lista').hide();
    $('#btn-torna').hide();
    $('.articolo').click(function () {
        var articolo = $(this).children('p').text();
        var id = $(this).attr("id");
        $.ajax({
                type: "POST", // HTTP method
                url: "rimuovi.php", //Where to make Ajax calls
                data: {articolo: articolo},
                success: function (ritorno) {
                    // alert(articolo + ' ' + ritorno);
                    if (ritorno == 'success') {
                        $("#" + id).hide();
                        sweetAlert('OK','Articolo ' + articolo + ' rimosso', 'success');
                    }
                }
            }
        );
    });

    $('#btn-aggiungi').click(function () {
        $('#lista').hide();
        $('#aggiungi-lista').show();
        $('#btn-aggiungi').hide();
        $('#btn-torna').show();
    });
    $('#form-aggiungi').ajaxForm(function () {
        var nome = this.data;
        var nomepulito = nome.replace('art=','');
        sweetAlert('OK', "Articolo " + nomepulito + " inserito", "success");
        $('#art').val('');
        console.log(this.data);
    });

    $('#btn-torna').click(function () {
        $('#aggiungi-lista').hide();
        $('#lista').show();
        $('#btn-aggiungi').show();
        $('#btn-torna').hide();
    })
});