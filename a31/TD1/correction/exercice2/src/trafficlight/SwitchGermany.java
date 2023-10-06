package cars.correction.exercice2.src.trafficlight;

public class SwitchGermany implements SwitchColorStrategy {

	private LightColor _previousColor;

	public SwitchGermany( LightColor currentColor ) {
		if (currentColor == LightColor.ORANGE )
			_previousColor = LightColor.RED;
		else
			_previousColor = LightColor.ORANGE;
	}

	@Override
	public LightColor switchColor( LightColor currentColor ) {
		LightColor newColor = currentColor;
		switch (currentColor) {
			case GREEN:
			case RED:
				_previousColor = currentColor;
				newColor = LightColor.ORANGE;
				break;
			case ORANGE:
				if ( _previousColor == LightColor.RED )
					newColor = LightColor.GREEN;
				else
					newColor = LightColor.RED;
				break;
			default:
				break;
		}
		return newColor;
	}

}