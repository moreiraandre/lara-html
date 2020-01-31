<form {!! $attrTag !!}>
    {!! csrf_field() !!}
    {!! method_field($attr['method']) !!}
    {!! $htmlPlugins !!}
</form>
