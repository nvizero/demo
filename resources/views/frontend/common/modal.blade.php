


<!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                Launch static backdrop modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="inquryModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="inquryModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="inquryModalLabel">我想詢問</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- 內容_start -->
                            <div class="form-wrap">
                                <form action="/prod_aform" method="POST" class="form-horizontal">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$prod->id}}">
                                    <input type="hidden" name="product_serial" value="{{$prod->serial}}">
                                    <div class="row row-margin">
                                        @foreach(getAform() as $row)
                                            <div class="col-md-{{$row->size}} col-padding">
                                                <div class="form-group">
                                                  <label for="" class="control-label">{{$row->show_name}}</label>
                                                  @if($row->cate=='input')
                                                    <input type="text" class="form-control" id="cname" placeholder="" name="{{$row->val}}">
                                                  @elseif($row->cate=='textarea')
                                                    <textarea class="form-control" rows="8" name="{{$row->val}}" id="content"></textarea>
                                                  @elseif($row->cate=='radio' || $row->cate=='checkbox')
                                                    @foreach(cellKeys($row->key) as $k => $data)
                                                      <div class="{{$row->cate}}">
                                                        <input type="{{$row->cate}}" class="" id="{{$row->cate}}_{{$data}}" placeholder="" name="{{$row->val}}_{{$row->id}}_{{$row->cate}}[{{$k}}]" value="{{$data}}">
                                                        <label for="{{$row->cate}}_{{$data}}" class="control-label">{{$data}}</label>
                                                      </div>
                                                    @endforeach
                                                  @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="text-center">
                                        <button class="uk-button" type="reset">取消</button>
                                        <button class="uk-button mr-4" type="submit" id="contactformbtn">送出</button>
                                    </div>
                                </form>
                            </div>
                            <!-- 內容_end -->
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div> -->
                    </div>
                </div>
            </div>
