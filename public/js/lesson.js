var moi = "b1";
var cu = null;
function open_lesion(btn){
        var GetId = btn.id;
        var tmp = document.getElementById(GetId);
        tmp.style.display = "block";
        cu = moi;
        moi = GetId;
        if(moi != cu){
            var tmp0 = document.getElementById(cu);
            tmp0.style.display = "none";
        }
}


