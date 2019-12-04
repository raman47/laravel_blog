@section('script')
    <script>
        $('#title').on('blur',function(){
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = theTitle.replace(/&/g, '-and-')
                    .replace(/[^a-z0-9-]+/g, '-')
                    .replace(/\-\-+/g, '-')
                    .replace(/^-+|-+$/g, '');
            slugInput.val(theSlug);
        });
        var simplemde1 = new SimpleMDE({ element: $("#excerpt")[0] });
        var simplemde2 = new SimpleMDE({ element: $("#body")[0] });

        $('#published_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss'
        });

        $("#draft-btn").click(function (e) {
            e.preventDefault();
            $("#published_at").val("");
            $('#post-form').submit();
        })
    </script>
@endsection
