function editZones()
        {
            if(document.getElementById('welcomeText').style.display==='block' ||document.getElementById('inpageAdNav').style.display==='block' )
            {
                document.getElementById('welcomeText').style.display='none';
                document.getElementById('adNav').style.display='block';
                document.getElementById('zoneKey').style.display='block';
                document.getElementById('inpageAdNav').style.display='none';
                //document.getElementById('inpageAdKey').style.display='none';
            }
            else
            {
                document.getElementById('welcomeText').style.display='block';
                document.getElementById('adNav').style.display='none';
                document.getElementById('zoneKey').style.display='none';
            }
        }
        
        function editInPage()
        {
            if(document.getElementById('welcomeText').style.display==='block' ||document.getElementById('adNav').style.display==='block' )
            {
                document.getElementById('welcomeText').style.display='none';
                document.getElementById('adNav').style.display='none';
                document.getElementById('zoneKey').style.display='none';
                document.getElementById('inpageAdNav').style.display='block';
                document.getElementById('innerPageKey').style.display='block';
            }
            else
            {
                document.getElementById('welcomeText').style.display='block';
                document.getElementById('adNav').style.display='none';
                document.getElementById('zoneKey').style.display='none';
                document.getElementById('inpageAdNav').style.display='none';
                document.getElementById('innerPageKey').style.display='none';
            }
        }
        
        function showEditWindow(id)
        {
            window.open('zoneEditWindow.php?id='+id,'','width=500,height=500');
        }
        
        function showSubList(id)
        {
            switch(id)
            {
                case'houseHoldDiv':
                document.getElementById('inhouseHoldDiv').style.display='block';
                document.getElementById('inpantryDiv').style.display='none';
                document.getElementById('inpartyDiv').style.display='none'; 
                document.getElementById('inhealthDiv').style.display='none';
                document.getElementById('inschDiv').style.display='none';
                document.getElementById('intoyDiv').style.display='none';
                document.getElementById('inseasDiv').style.display='none';
                document.getElementById('inapprlDiv').style.display='none';
                break;
                
                case'pantryDiv':
                document.getElementById('inhouseHoldDiv').style.display='none';
                document.getElementById('inpantryDiv').style.display='block';
                document.getElementById('inpartyDiv').style.display='none'; 
                document.getElementById('inhealthDiv').style.display='none';
                document.getElementById('inschDiv').style.display='none';
                document.getElementById('intoyDiv').style.display='none';
                document.getElementById('inseasDiv').style.display='none';
                document.getElementById('inapprlDiv').style.display='none';
                break;
                
                case'partyDiv':
                document.getElementById('inhouseHoldDiv').style.display='none';
                document.getElementById('inpantryDiv').style.display='none';
                document.getElementById('inpartyDiv').style.display='block'; 
                document.getElementById('inhealthDiv').style.display='none';
                document.getElementById('inschDiv').style.display='none';
                document.getElementById('intoyDiv').style.display='none';
                document.getElementById('inseasDiv').style.display='none';
                document.getElementById('inapprlDiv').style.display='none';
                break;
                
                case'healthDiv':
                document.getElementById('inhouseHoldDiv').style.display='none';
                document.getElementById('inpantryDiv').style.display='none';
                document.getElementById('inpartyDiv').style.display='none'; 
                document.getElementById('inhealthDiv').style.display='block';
                document.getElementById('inschDiv').style.display='none';
                document.getElementById('intoyDiv').style.display='none';
                document.getElementById('inseasDiv').style.display='none';
                document.getElementById('inapprlDiv').style.display='none';
                break;
                
                case'schDiv':
                document.getElementById('inhouseHoldDiv').style.display='none';
                document.getElementById('inpantryDiv').style.display='none';
                document.getElementById('inpartyDiv').style.display='none'; 
                document.getElementById('inhealthDiv').style.display='none';
                document.getElementById('inschDiv').style.display='block';
                document.getElementById('intoyDiv').style.display='none';
                document.getElementById('inseasDiv').style.display='none';
                document.getElementById('inapprlDiv').style.display='none';
                break;
                
                case'toyDiv':
                document.getElementById('inhouseHoldDiv').style.display='none';
                document.getElementById('inpantryDiv').style.display='none';
                document.getElementById('inpartyDiv').style.display='none'; 
                document.getElementById('inhealthDiv').style.display='none';
                document.getElementById('inschDiv').style.display='none';
                document.getElementById('intoyDiv').style.display='block';
                document.getElementById('inseasDiv').style.display='none';
                document.getElementById('inapprlDiv').style.display='none';
                break;
                
                case'seasDiv':
                document.getElementById('inhouseHoldDiv').style.display='none';
                document.getElementById('inpantryDiv').style.display='none';
                document.getElementById('inpartyDiv').style.display='none'; 
                document.getElementById('inhealthDiv').style.display='none';
                document.getElementById('inschDiv').style.display='none';
                document.getElementById('intoyDiv').style.display='none';
                document.getElementById('inseasDiv').style.display='block';
                document.getElementById('inapprlDiv').style.display='none';
                break;
                
                case'apprlDiv':
                document.getElementById('inhouseHoldDiv').style.display='none';
                document.getElementById('inpantryDiv').style.display='none';
                document.getElementById('inpartyDiv').style.display='none'; 
                document.getElementById('inhealthDiv').style.display='none';
                document.getElementById('inschDiv').style.display='none';
                document.getElementById('intoyDiv').style.display='none';
                document.getElementById('inseasDiv').style.display='none';
                document.getElementById('inapprlDiv').style.display='block';
                break;
            }
        }
function showInnEdit(id)
{
    var page = id.substring(0,id.indexOf('_'));
    var tail = id.substring(id.indexOf('_')+1,id.length);
    if(id.indexOf('AD')===-1)
    {
        switch(tail)
        {
            case'MAIN_PIC':
                window.open('pictureEditBox.php?id='+page+'&zone='+tail,'','width=500,height=500');
                break;
            case'BTM_LFT':
                window.open('pictureEditBox.php?id='+page+'&zone='+tail,'','width=500,height=500');
                break;
            case'BTM_RGHT':
                window.open('pictureEditBox.php?id='+page+'&zone='+tail,'','width=500,height=500');
                break;
            case'TITLE':
                //text edit box
                break;
            case'DESC':
                //description edit box
                break;
        }
    }
    else
    {
        switch(id)
        {

        }
    }
    
}
