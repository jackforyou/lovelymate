    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">LOVELY MATE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-content">
                        <div class="header-content-post">
                            <form action="upload-data" method="POST" role="form" enctype="multipart/form-data">
                                <legend>รายละเอียด</legend>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">ชื่อเล่น</label>
                                        <input name="nickname" type="text" class="form-control" id="" placeholder="ตัวอย่าง แอน สาวสวย" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="">อายุ</label>
                                        <input name="age" type="text" class="form-control" id="" placeholder="ตัวอย่าง 27, 20กว่าๆ, 30ต้นๆ " required="required">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">จังหวัด</label>
                                        <input name="province" type="text" class="form-control" id="" placeholder="ตัวอย่าง กรุงเทพ, สมุทรปราการ, นครปฐม" required="required">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">อาชีพ</label>
                                        <input name="career" type="text" class="form-control" id="" placeholder="ตัวอย่าง หมอ, นักบัญชี, ครู, พนักกงานออฟฟิต" required="required">
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="">สัดส่วน</label>
                                        <input name="shape" type="text" class="form-control" id="" placeholder="ตัวอย่าง 34-33-35">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">ความสนใจ</label>
                                        <input name="interests" type="text" class="form-control" id="" placeholder="ตัวอย่าง ชอบดูหนัง, ชอบออกกำลังกาย, ชอบกินอาหารญี่ปุ่น" required="required">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">เบอร์โทรติดต่อ</label>
                                        <input name="phone" type="text" class="form-control" id="" placeholder="ตัวอย่าง 080-9999-999" required="required">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">facebook</label>
                                        <input name="facebook" type="text" class="form-control" id="" placeholder="ตัวอย่าง Nina Sithada" required="required">
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="">E-mail</label>
                                        <input name="email" type="email" class="form-control" id="" placeholder="ตัวอย่าง lovely-cute@gmail.com" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="">ยืนยัน E-mail อีกครั้ง</label>
                                        <input type="email" class="form-control" id="" placeholder="ตัวอย่าง lovely-cute@gmail.com" required="required">
                                    </div>
                                </div>
                                </div>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </header>
    <div id="app-4">
      <ol>
        <li v-for="todo in todos">
          <?php echo todo.text; ?>

        </li>
      </ol>
    </div>
    <script src="dependency/js/vue.js"></script>
    <script type="text/javascript">
        var app4 = new Vue({
          el: '#app-4',
          data: {
            todos: [
              { text: 'Learn JavaScript' },
              { text: 'Learn Vue' },
              { text: 'Build something awesome' }
            ]
          }
        })
    </script>