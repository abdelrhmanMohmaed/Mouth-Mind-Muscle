// Validation
$('body').on("change", "#height", function () {
    validation(height, 'height', 'height');
    var fields = [
        "bmr", "tde", "start_goal", "ideal_goal", "max_goal", "bmr_hide", "tde_hide", "start_goal_hide", "ideal_goal_hide", "max_goal_hide"
    ];
    resetForm(fields);

    $('#gender').prop('selectedIndex', 0);
    $('#activity').prop('selectedIndex', 0);
    $('#goal').prop('selectedIndex', 0);
});
$('body').on("change", "#weight", function () {
    validation(weight, 'weight', 'weight');
    var fields = [
        "bmr", "tde", "start_goal", "ideal_goal", "max_goal", "bmr_hide", "tde_hide", "start_goal_hide", "ideal_goal_hide", "max_goal_hide"
    ];
    resetForm(fields);

    $('#gender').prop('selectedIndex', 0);
    $('#activity').prop('selectedIndex', 0);
    $('#goal').prop('selectedIndex', 0);

});
$('body').on("change", "#birthday", function () {
    validation(birthday, 'birthday', 'birthday');

    var fields = [
        "bmr", "tde", "start_goal", "ideal_goal", "max_goal", "bmr_hide", "tde_hide", "start_goal_hide", "ideal_goal_hide", "max_goal_hide"
    ];
    resetForm(fields);

    $('#gender').prop('selectedIndex', 0);
    $('#activity').prop('selectedIndex', 0);
    $('#goal').prop('selectedIndex', 0);
});
$('body').on("change", "#gender", function () {
    $('#activity').prop('selectedIndex', 0);
    $('#goal').prop('selectedIndex', 0);

    var fields = [
        "bmr", "tde", "start_goal", "ideal_goal", "max_goal", "bmr_hide", "tde_hide", "start_goal_hide", "ideal_goal_hide", "max_goal_hide"
    ];
    resetForm(fields);

    $('#activity').prop('selectedIndex', 0);
    $('#goal').prop('selectedIndex', 0);
});
$('body').on("change", "#activity", function () {
    let gender = $('#gender').val();
    let height = $('#height').val();
    let weight = $('#weight').val();
    let birthday = $('#birthday').val();

    validation(gender, 'gender', 'gender');
    validation(height, 'height', 'height');
    validation(weight, 'weight', 'weight');
    validation(birthday, 'birthday', 'birthday');

    var fields = ["start_goal", "ideal_goal", "max_goal"];
    resetForm(fields);
    $('#goal').prop('selectedIndex', 0);
});

// calcActivity
function calcActivity() {

    let birthday = $('#birthday').val();
    let weight = $('#weight').val();
    let height = $('#height').val();
    let age = currentAge(birthday);
    let gender = $('#gender').val();


    switch (gender) {
        case "Male":
            let activityMale = $('#activity').val();
            if (!activityMale) {
                return;
            }

            let bmrMale = (66 + (13.75 * weight) + (5 * (height) - (6.8 * age) + 5));
            $('#bmr').val(parseFloat(bmrMale).toFixed(3));
            $('#bmr_hide').val(parseFloat(bmrMale).toFixed(3));

            let tdeMale = (activityMale * bmrMale);
            $('#tde').val(parseFloat(tdeMale).toFixed(3));
            $('#tde_hide').val(parseFloat(tdeMale).toFixed(3));

            return tdeMale;

        case "Female":
            let activityFemale = $('#activity').val();
            if (!activityFemale) {
                return;
            }
            let bmrFemale = ((655 + (9.6 * weight) + (1.8 * height) - (4.7 * age)) - 151);
            $('#bmr').val(parseFloat(bmrFemale).toFixed(3));
            $('#bmr_hide').val(parseFloat(bmrFemale).toFixed(3));

            let tdeFemale = (activityFemale * bmrFemale);
            $('#tde').val(parseFloat(tdeFemale).toFixed(3));
            $('#tde_hide').val(parseFloat(tdeFemale).toFixed(3));
            return tdeFemale;
        default:
            alert("Sorry, Something was wrong check (Birthday, Height, Weight, Gender)");

            var fields = [
                "bmr", "tde", "start_goal", "ideal_goal", "max_goal", "bmr_hide", "tde_hide", "start_goal_hide", "ideal_goal_hide", "max_goal_hide"
            ];
            resetForm(fields);
            break;
    }
};

// calcGoals
function calcGoals() {
    let tde = calcActivity();
    let val = $('#goal').val();

    if (!$("#activity").val()) {
        return;
    }

    switch (val) {
        case "loss":
            let start_goal = ((tde - (tde * 5) / 100));
            let ideal_goal = ((tde - (tde * 15) / 100));
            let max_goal = ((tde - (tde * 20) / 100));

            retunData(
                'start_goal', 'ideal_goal', 'max_goal',
                'start_goal_hide', 'ideal_goal_hide', 'max_goal_hide',
                start_goal, ideal_goal, max_goal,
            );
            break;

        case "gain":
            let start_gain = ((tde + (tde * 5) / 100));
            let ideal_gain = ((tde + (tde * 10) / 100));
            let max_gain = ((tde + (tde * 15) / 100));

            retunData(
                'start_goal', 'ideal_goal', 'max_goal',
                'start_goal_hide', 'ideal_goal_hide', 'max_goal_hide',
                start_gain, ideal_gain, max_gain,
            );
            break;

        case "maintenance":

            retunData(
                'start_goal', 'ideal_goal', 'max_goal',
                'start_goal_hide', 'ideal_goal_hide', 'max_goal_hide',
                tde, tde, tde,
            );
            break;

        default:
            alert("Sorry, please try again 22.");

            var fields = ["start_goal", "ideal_goal", "max_goal"];
            resetForm(fields);
            break;
    }
}









// helpers
// resetForm
function resetForm(fields) {
    for (var i = 0; i < fields.length; i++) {
        $('#' + fields[i]).val('');
    }
}

// retunData to form inputes
function retunData(
    firstField, secondField, thirdField, firstHide, secondHide, thirdHide, firstData, secondData, thirdData
) {
    $('#' + firstField).val(parseFloat(firstData).toFixed(3));
    $('#' + secondField).val(parseFloat(secondData).toFixed(3));
    $('#' + thirdField).val(parseFloat(thirdData).toFixed(3));

    $('#' + firstHide).val(parseFloat(firstData).toFixed(3));
    $('#' + secondHide).val(parseFloat(secondData).toFixed(3));
    $('#' + thirdHide).val(parseFloat(thirdData).toFixed(3));
}

// currentAge
function currentAge(birthday) {
    var currentYear = (new Date).getFullYear();
    var formattedDate = new Date(birthday);
    var y = formattedDate.getFullYear();
    let age = (currentYear - y);
    return age;
}

// validation
function validation(val, input, attr) {
    if (val.length == 0) {
        $("." + input).slideDown(500);
        $("#" + attr).addClass("is-invalid");
        return false
    } else {
        $("." + input).slideUp(500);
        $("#" + attr).removeClass("is-invalid");
        return true;
    }
}
