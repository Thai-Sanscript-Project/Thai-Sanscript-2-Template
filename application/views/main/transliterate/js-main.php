<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type="text/javascript">

    function getSrcTxtval() {
        return $("#src-txt").val();
    }
    function getDestTxtVal() {
        return $("#dest-txt").val();
    }
    function getSrcTypeText() {
        return $("#src-type option:selected").text();
    }
    function getDestTypeText() {
        return $("#dest-type option:selected").text();
    }
    function getSrcTypeval() {
        return $("#src-type").val();
    }
    function getDestTypeVal() {
        return $("#dest-type").val();
    }

    function transliteration() {
        var output = "";
        var txt = getSrcTxtval();
        var srcType = getSrcTypeval();
        var destType = getDestTypeVal();

        if (destType !== 'none') {
            if (srcType === 'thai') {
                /*thaisanscript.js*/
                txt = thaisanscript(txt);
                srcType = 'iast';
            }
            output = Sanscript.t(txt, srcType, destType);
        }
        return output;
    }
</script>

