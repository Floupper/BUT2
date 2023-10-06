package cars.correction.exercice2.src.trafficlight;

public class TrafficLight {

	private Boolean _isOn = false;
	private LightColor _color = LightColor.RED;
	private SwitchColorStrategy _switchAlgorithm;

	public TrafficLight() {
		_switchAlgorithm = new SwitchFrance();
	}

	public Boolean isOn() {
		return _isOn;
	}

	public LightColor getColor() {
		return _color;
	}

	public void onOff() {
		_isOn = !_isOn;
		_color = LightColor.RED;
	}

	public void switchColor() {
		_color = _switchAlgorithm.switchColor(_color);
	}

	public void setSwitchColorStrategy( SwitchColorStrategy algorithm ) {
		_switchAlgorithm = algorithm;
	}

}

