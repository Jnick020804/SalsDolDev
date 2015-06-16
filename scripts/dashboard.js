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

