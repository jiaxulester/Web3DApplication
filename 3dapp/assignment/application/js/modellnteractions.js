var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function defaultLight()
{
	lightOn = true;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function Front()
{
	document.getElementById('model__Front').setAttribute('bind', 'true');
}
function Back()
{
	document.getElementById('model__Back').setAttribute('bind', 'true');
}
function Left()
{
	document.getElementById('model__Left').setAttribute('bind', 'true');
}
function Right()
{
	document.getElementById('model__Right').setAttribute('bind', 'true');
}
function Top()
{
	document.getElementById('model__Top').setAttribute('bind', 'true');
}
function Bottom()
{
	document.getElementById('model__Bottom').setAttribute('bind', 'true');
}