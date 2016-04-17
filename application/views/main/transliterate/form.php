<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="contact-info" style="background: #f2f2f2;">
    <div class="container">
        <div class="center">        
            <h2>เลือกชนิดตัวอักษรที่จะทำการปริวรรต</h2>
            <p class="lead">เมื่อคุณเลือกชนิดตัวอักษรแล้ว คุณสามารถดูตารางเปรียบเทียบการปริวรรตอักษรด้านล่าง [<a href="#contact-page">ดูตารางเปรียบเทียบ</a>]</p>
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>ตัวอักษรต้นฉบับ</label>
                        <!--<input type="text" name="subject" class="form-control" required="required">-->
                        <select name="src-type"  id="src-type" class="form-control" style="overflow: scroll;" >
                            <optgroup label="ไทย">
                                <option value="ths" >ไทยคงรูป</option>                             
                            </optgroup>
                            <optgroup label="อินเดีย">
                                <option value="dev" selected="selected" >เทวนาครี (अ)</option>
                                <option value="ben">เบงกาลี (অ)</option>
                                <option value="pun">คุรมุขี (ਅ)</option>
                                <option value="guj">คุชราตี (અ)</option>
                                <option value="ori">โอริยา (ଅ)</option>
                                <option value="tam">ทมิฬ (அ)</option>
                                <option value="tel">เตลูกู (అ)</option>
                                <option value="kan">กันนาดา (ಅ)</option>
                                <option value="mal">มาลายัม (അ)</option>
                            </optgroup>
                            <optgroup label="โรมัน">
                                <option value="rIast" >IAST</option>
                                <option value="rKol">Kolkata</option>
                                <option value="rItrans" >ITRANS</option>
                                <option value="rHk">Harvard-Kyoto</option>
                                <option value="rSlp">SLP</option>
                            </optgroup>                           
                        </select>
                    </div>
                    <div class="form-group">
                        <!--<label>Message *</label>-->
                        <textarea name="src-txt"  id="src-txt" required="required" class="form-control" rows="8"></textarea>
                    </div>                         
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>ตัวอักษรผลลัพธ์</label>
                        <select class="form-control" name="dest-type"  id="dest-type">
                            <optgroup label="ไทย">
                                <option value="ths">ไทยคงรูป</option>
                                <option value="thn">ไทยปรับรูป</option>
                            </optgroup>
                            <optgroup label="อินเดีย">
                                <option value="dev">เทวนาครี (अ)</option>
                                <option value="ben">เบงกาลี (অ)</option>
                                <option value="pun">คุรมุขี (ਅ)</option>
                                <option value="guj">คุชราตี (અ)</option>
                                <option value="ori">โอริยา (ଅ)</option>
                                <option value="tam">ทมิฬ (அ)</option>
                                <option value="tel">เตลูกู (అ)</option>
                                <option value="kan">กันนาดา (ಅ)</option>
                                <option value="mal">มาลายัม (അ)</option>
                            </optgroup>
                            <optgroup label="โรมัน">
                                <option value="rIast" selected="selected" >IAST</option>
                                <option value="rKol">Kolkata</option>
                                <option value="rItrans" >ITRANS</option>
                                <option value="rHk">Harvard-Kyoto</option>
                                <option value="rSlp">SLP</option>
                            </optgroup>     
                        </select>
                    </div>
                    <div class="form-group">
                        <!--<label>Message *</label>-->
                        <textarea name="dest-txt"  id="dest-txt" required="required" class="form-control" rows="8"></textarea>
                    </div>                                      
                </div>
                <div class="form-group center">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                </div>
            </form> 
        </div><!--/.row-->
        
        

    </div><!--/.container-->
</section><!--/#contact-page-->