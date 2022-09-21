function link_imagemap_to_checkbox(targetId) {
    var target = document.getElementById(targetId);
    target.checked = !target.checked;
    return false;
}
