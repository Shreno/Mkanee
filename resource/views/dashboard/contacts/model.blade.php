<div class="modal fade" id="status">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <form  action="{{route('contacts.store')}}" method="post">
            @csrf 
            <input type="hidden" name="contact_id" value="{{$contact->id}}">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label  class="control-label">العنوان</label>
                           <input type="text" name="title" class="form-control" id="">
                          
                        </div>
                        <div class="form-group">
                            <label  class="control-label"> الوصف   </label>
                            <input type="text" class="form-control" name="message" id="" >
                        </div>
                      
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">غلق</button>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>