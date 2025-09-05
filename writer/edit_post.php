<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="/Blogwebsite/js/script.js"></script>
    <link rel="stylesheet" href="/Blogwebisite/css/style.css">
</head>
<body>
        <!--bold-->
        <button onclick="toggleBold()">Bold</button>

        <script>
        function toggleBold() {
        const selection = window.getSelection();
        if (!selection.rangeCount) return;

        const range = selection.getRangeAt(0);
        const bold = document.createElement('b');
        bold.appendChild(range.extractContents());
        range.insertNode(bold);
        }
        </script>

        <!--italic-->
        <button onclick="toggleItalic()">Italic</button>

        <script>
        function toggleItalic() {
        const selection = window.getSelection();
        if (!selection.rangeCount) return;

        const range = selection.getRangeAt(0);
        const italic = document.createElement('i');
        italic.appendChild(range.extractContents());
        range.insertNode(italic);
        }
        </script>

        <!--underline-->
        <button onclick="toggleUnderline()">Underline</button>

        <script>
        function toggleUnderline() {
        const selection = window.getSelection();
        if (!selection.rangeCount) return;

        const range = selection.getRangeAt(0);
        const underline = document.createElement('u');
        underline.appendChild(range.extractContents());
        range.insertNode(underline);
        }
        </script>

        <!--fontsize>
        <button onlclick="toggleFontsize()">Fontsize</button>

        <script>
        function toggleFontsize() {
        const selection = window.getSelection();
        if (!selection.rangeCount) return;

        const range = selection.getRangeAt(0);
        const fontsize = document.createElement('');
        italic.appendChild(range.extractContents());
        range.insertNode(italic);
        }
        </script-->

        <!--fontcolor>
        <label>Fontcolor</label>
        <select name ="fontcolor" id="fontcolor" >
            <option name="red" id ="fontcolor">RED</option>
            <option name="blue" id ="fontcolor">BLUE</option>
            <option name="yellow" id ="fontcolor">YELLOW</option>
        </select>

        <script>
        function toggleItalic() {
        const selection = window.getSelection();
        if (!selection.rangeCount) return;

        const range = selection.getRangeAt(0);
        const italic = document.createElement('i');
        italic.appendChild(range.extractContents());
        range.insertNode(italic);
        }
        </script-->

        <!--orderred list-->
        <button onclick="toggleOrderedlist()">Ordered List</button>

        <script>
        function toggleOrderedlist() {
        const selection = window.getSelection();
        if (selection.toString().trim() === "") return;
        if (!selection.rangeCount) return;

        const range = selection.getRangeAt(0);
        const ol = document.createElement('ol');
        const li = document.createElement('li');
        const content = range.cloneContents();
        const content = content.split(" ");
        li.appendChild(content);
        ol.appendChild(li);  
        range.deleteContents();
        foreach(item as items){
            range.insertNode(ol);
        }
        range.insertNode(ol);
        selection.removeAllRanges();
        const newRange = document.createRange();
        newRange.setStartAfter(ol);
        newRange.collapse(true);
        selection.addRange(newRange);
        }
        </script>

        <!--unordered list-->
        <button name="ul" id="ul">Unordered List</button> 
        <script>
        function toggleItalic() {
        const selection = window.getSelection();
        if (!selection.rangeCount) return;

        const range = selection.getRangeAt(0);
        const italic = document.createElement('i');
        italic.appendChild(range.extractContents());
        range.insertNode(italic);
        }
        </script>

    <form>  
        <!--textbox-->
        <div contenteditable="true" id="editor">Type something here...</div>
        <input type="submit" name="submit-text" id="submit-text">
    </form>

</body>
</html>