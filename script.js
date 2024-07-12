function anexoUpload() {
    var form = document.getElementById('enviar_arquivos');
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'enviar_arquivos.php', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                alert(xhr.responseText);

            } else {
                alert('Erro ao enviar o arquivo.');
            }
        }
    };

    xhr.send(formData);
}
