<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type="text/javascript">
    $(document).on({
        ajaxStart: function () {
            $("body").addClass("loading");
        },
        ajaxStop: function () {
            $("body").removeClass("loading");
        }
    });
    $('#translite-button').click(function () {
        var sourceTxt = getSrcTxtval();
        var source = lineSplit(sourceTxt);
        var destination = transliteration();
        destination = lineSplit(destination);
        var sendToBackend = transliteToBackend();

        var d = new Date();
        var timestamp = d.getTime();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Transliteration/json'); ?>",
            method: "POST",
            dataType: 'json',
            data: {
//                    "sanskrit-romanize": roman.val(),
//                    "sanskrit-devanagari": devanagari.val(),
                "src-txt": sendToBackend
            },
            success: function (data) {
                var lang = new Array();



                var html = header() +
                        checkbox() +
                        langSection('1', getSrcTypeText(), source) +
                        langSection('2', getDestTypeText(), destination) +
                        langSection('3', 'ไทย-คงรูป(แบบแผน)', data[0]) +
                        langSection('4', 'ไทย-ปรับรูป(ทั่วไป)', data[1]) +
                        backButton();
                $('#transliterate-compare').html(html);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                XMLHttpRequest = "";
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
            }
        });

    });

    var counterChecked = 0;
    $(document).on('click', '.checkbox-sanskrit', function () {
        var val = $(this).val();
        var countCheck = $('.checkbox-sanskrit:checkbox:checked').length;
        var percentwidth = (100 / countCheck).toFixed(2) - 2;
        if (!isNaN(percentwidth)) {
            $('.code').width(percentwidth + '%');
        }

        if ($(this).is(':checked')) {
            $("#" + val).show();
        } else {
            $("#" + val).hide();
        }

    });

    $(document).on('click', '.s', function () {
        var str = $(this).attr('id');
        var idsplit = str.split("-");
        var num = idsplit[1] + "-" + idsplit[2];

        $('.s').removeClass('hilight');
        $("#1-" + num).addClass('hilight');
        $("#2-" + num).addClass('hilight');
        $("#3-" + num).addClass('hilight');
        $("#4-" + num).addClass('hilight');
    });


    function getSyllable(langCode, lineNum, line) {
        var html = "";
        for (var i in line) {
            var id = langCode + "-" + lineNum + "-" + i;
            html += '<span id="' + id + '" class="s">' + line[i] + ' </span>';
        }
        return html;
    }
    function getLine(langCode, lineArr) {
        var html = "";
        for (var lineNum in lineArr) {
            var syllable = getSyllable(langCode, lineNum, lineArr[lineNum]);
            html += '<li class="code-li"><div>' + syllable + '</div></li>';
        }
        return html;
    }

    function langSection(langCode, langName, dataList) {
        var html = '<div id="' + langCode + '" class="code" ><p class="text-center code-p">' + langName + '</p>' +
                '<ol class="code-ol">' + getLine(langCode, dataList) + '</ol></div>';
        return html;
    }
    function header() {
        var html = '<div class="container"><div class="row"><div class="col-lg-12 text-center">' +
                '<h2 class="section-heading">เลือกชนิดตัวอักษรที่จะทำการเปรียบเทียบ</h2>' +
                '<h4 class="section-heading">คลิกที่คำจะทำเครื่องหมายเน้นสี เพื่อทำการเปรียบเทียบ</h4>' +
                '<h5 id="time-process" class="section-heading"></h5>' +
                '<hr class="primary">' +
                '</div></div></div>' +
                '<div style="clear: both"></div>';


        return html;
    }
    function checkbox() {
        var html = '<div class="container"><div class="row"><div class="col-lg-8 col-lg-offset-2 text-center"><p>' +
                '<input type="checkbox" class="checkbox-sanskrit" id="checkbox-1" value="1">' +
                '<label for="checkbox-1">' + getSrcTypeText() + '</label>&nbsp;' +
                '<input type="checkbox" class="checkbox-sanskrit" id="checkbox-2" value="2" checked="checked">' +
                '<label for="checkbox-2">' + getDestTypeText() + '</label>&nbsp;' +
                '<input type="checkbox" class="checkbox-sanskrit" id="checkbox-3" value="3" checked="checked">' +
                '<label for="checkbox-3">ไทย-คงรูป(แบบแผน)</label>&nbsp;' +
                '<input type="checkbox" class="checkbox-sanskrit" id="checkbox-4" value="4">' +
                '<label for="checkbox-4">ไทย-ปรับรูป(ทั่วไป)</label>&nbsp;' +
                '</p></div></div></div>';
        return html;
    }
    function backButton() {
        var html = '<div style="clear: both"></div><div class="container"><div class="row" style="height: 100px">' +
                '<div class="col-lg-8 col-lg-offset-2 text-center"><p></p>' +
                '<a href="#about" class="btn btn-default btn-xl page-scroll">' +
                '<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>' +
                'กลับไปปริวรรต</a></div></div></div> ';
        return html;
    }



    //-----------------------------------
    function syllableSplit(line) {
        return line.split('@');
        ;
    }
    function lineSplit(txt) {
        txt = txt.replace(/\x20+/g, '@');
        var lineSplit = txt.split(/\r\n|\r|\n/);
        return  lineSplit.map(syllableSplit);
        //console.log(lineSplit);
    }

</script>
