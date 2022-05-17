<div class="modal fade" id="compose">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">Send Mail</div>
               <div class="modal-body">
                   <form action="index.php" method="post" enctype="multipart/form-data">
                       <div class="mb-3">
                           <div class="form-floating">
                               <input type="text" name="to" placeholder="to" class="form-control">
                               <label for="">To.</label>
                           </div>
                       </div>
                       <div class="mb-3">
                           <div class="form-floating">
                               <input type="text" name="subject" placeholder="subject" class="form-control">
                               <label for="">Subject</label>
                           </div>
                       </div>
                       <div class="mb-3">
                           <div class="class">
                           <label for="">Attachment</label>
                               <input type="file" name="attachement" placeholder="attachement" class="form-control">
                           </div>
                       </div>
                       <div class="mb-3">
                           <div class="">
                               <textarea  placeholder="Write Content" name="content" class="form-control" rows="10"></textarea>
                           </div>
                       </div>
                       <div class="mb-3">
                           <input type="submit" name="save" value="save" class="btn btn-primary ">
                           <input type="submit" name="send" value="Send" class="btn btn-success">
                       </div>
</form>
               </div>
            </div>
        </div>
    </div>