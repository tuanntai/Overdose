<div class="form-group">
    {!! Form::label('name', 'Tên: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email: ') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
{{-- @guest --}}
<div class="form-group">
    <label for="role" class="col-form-label">Chọn quyền: </label>
    {!! Form::select('role', $roles	, null, array('class' => 'form-control')); !!}
</div>
{{-- @endguest --}}
<div class="form-group">
        {!! Form::label('password', 'Mật khẩu: ') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
{!! Form::submit($submitbuttontext, ['class' => 'btn']) !!}
{!! Form::close() !!}