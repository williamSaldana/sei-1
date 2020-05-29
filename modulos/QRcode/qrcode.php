    <video id="preview"></video>
    <script>
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
            }
        );
        scanner.addListener('scan', function(content) {
            alert('El resultado es: ' + content);
            window.location.href="?page=gestion_ue/front_informacionUE&nombre="+content;
        });
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                alert("No existe camara en el dispositivo!");
            }
        });
    </script>
