<?php
session_start();
//Exibição da mensagem 
if(isset($_SESSION['mensagem'])){ ?>
<script>
    window.onload = function (){
        M.toast({html: '<?php echo $_SESSION['mensagem'] ?>'})
    }
    </script>
<?php
}
session_unset();
?>