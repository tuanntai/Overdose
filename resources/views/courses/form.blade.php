            <div class="form-group">
                {!! Form::label('title', 'Tên khóa học:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                @if ($errors->any('title'))
                    <div class="alert alert-danger">
                        Tên khóa học không được để trống
                    </div>
                @endif 
            </div>
            <div class="form-group">
                {!! Form::label('thumbnail', 'Link Hình ảnh:' ) !!}
                {!! Form::text('thumbnail', null, array('class' => 'form-control')) !!}
                @if ($errors->any('thumbnail'))
                    <div class="alert alert-danger">
                        Ảnh không được để trống
                    </div>
                @endif 
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Mô tả: ') !!}
                {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
                @if ($errors->any('description'))
                    <div class="alert alert-danger">
                        Mô tả không được để trống
                    </div>
                @endif                  
            </div>
            {!! Form::submit($submitbuttontext, ['class' => 'btn']) !!}
            {!! Form::close() !!}
