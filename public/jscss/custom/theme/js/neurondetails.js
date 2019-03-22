$(document).ready(function() {
    //$("#fileUpload").hide();
    $("#Pre-proDropped").hide();
    $("#NeuronDropped").hide();
    $("#postDropped").hide();
    $("#vizDropped").hide();
    $("#statusDropped").hide();
    //$("#geo0").val([0]);
    $("#Pre-pro").draggable({
        revert: "invalid"
    });
    $("#Neuron").draggable({
        revert: "invalid"
    });
    $("#post").draggable({
        revert: "invalid"
    });
    $("#viz").draggable({
        revert: "invalid"
    });
    $("#dropPre-pro").droppable({
        accept: "#Pre-pro",
        drop: function(event, ui) {
            $("#Pre-proDropped").show();
            $(this).css("background-color", "#ffffff");
            $("#Pre-pro").hide();
            $("#NeuronDropped").show();
            $("#Neuron").hide();
            $("#dropNeuron").css("background-color", "#ffffff");
            $("#conf1").val(["1"]);
            $("#status").hide();
            $("#statusDropped").show();
            $("#dropStatus").css("background-color", "#ffffff");
        }
    });
    $("#dropNeuron").droppable({
        accept: "#Neuron",
        drop: function(event, ui) {
            $("#NeuronDropped").show();
            $(this).css("background-color", "#ffffff");
            $("#Neuron").hide();
            //$("#Pre-proDropped").show();
            //$("#Pre-pro").hide();
            $("#conf2").val(["2"]);
            //$("#dropPre-pro").css("background-color", "#ffffff");
            $("#status").hide();
            $("#statusDropped").show();
            $("#dropStatus").css("background-color", "#ffffff");
        }
    });
    $("#dropPost").droppable({
        accept: "#post",
        drop: function(event, ui) {
            $("#postDropped").show();
            $(this).css("background-color", "#ffffff");
            $("#post").hide();
            $("#NeuronDropped").show();
            $("#Neuron").hide();
            //$("#Pre-proDropped").show();
            //$("#Pre-pro").hide();
            $("#conf3").val(["3"]);
            //$("#dropPre-pro").css("background-color", "#ffffff");
            $("#dropNeuron").css("background-color", "#ffffff");
            $("#status").hide();
            $("#statusDropped").show();
            $("#dropStatus").css("background-color", "#ffffff");
        }
    });
    $("#dropViz").droppable({
        accept: "#viz",
        drop: function(event, ui) {
            $("#vizDropped").show();
            $(this).css("background-color", "#ffffff");
            $("#viz").hide();
            $("#NeuronDropped").show();
            $("#Neuron").hide();
            $("#conf3").val(["3"]);
            $("#dropNeuron").css("background-color", "#ffffff");
            $("#status").hide();
            $("#statusDropped").show();
            $("#dropStatus").css("background-color", "#ffffff");
        }
    });
});