<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php if(isset($aJsScripts)) { ?>
    <?php foreach($aJsScripts as $sScriptJs) {?>
        <script src="<?php echo $sScriptJs ?>"></script> 
    <?php } ?>
<?php } ?>
</body>
</html>