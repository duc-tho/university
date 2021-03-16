<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timymce</title>
</head>

<body>
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <textarea id="timymce" name="tinymce"></textarea>
        <button type="submit">Submit</button>
    </form>
    <script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.baseURL = "{{ asset('plugins/tinymce') }}";
        tinymce.init({
            selector: "textarea#timymce",
            plugins: [
                "image imagetools",
            ],
            language: 'vi',
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image",
            file_picker_callback: function (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                let y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                let type = 'image' === meta.filetype ? 'Images' : 'Files',
                    url = '/laravel-filemanager?editor=tinymce5&type=' + type;

                tinymce.activeEditor.windowManager.openUrl({
                    url: url,
                    title: 'Quản Lý Files',
                    width: x * 0.8,
                    height: y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content.replace('storage', 'dist/upload'));
                    }
                });
            }
        });
    </script>
</body>

</html>
