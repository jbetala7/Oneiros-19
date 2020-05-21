var x=0;
function openDetails(detid) 
{
    x=1;
    document.querySelector(detid).classList.remove('is-paused');
}
                
function closeDetails(detid) 
{
    x=0;
    document.querySelector(detid).classList.add('is-paused');
}

    
function closeAll()
{
    for(i=0;i<38;i++)
    {
        var z;
        z="#det"+i;
        closeDetails(z);
    }
    for(i=0;i<7;i++)
    {
        var y;
        y="#abt"+i;
        closeDetails(y);
    }
}
function toggled(i)
{
            
    if(x==0)
    {
        openDetails(i);
    }
    else
    {
        closeDetails(i);
    }
}

