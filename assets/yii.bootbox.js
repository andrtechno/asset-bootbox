$(function () {
    yii.confirm = function (message, ok, cancel) {
        bootbox.confirm(message, function (result) {
            if (result) {
                !ok || ok();
            } else {
                !cancel || cancel();
            }
        });
    }
});