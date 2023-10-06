package cars.correction.exercice2.src.trafficlight;

public class TrafficLightApp {

	public static void main(String[] args) {

		TrafficLight light = new TrafficLight();
		printLightInfos( light );
		light.onOff();
		printLightInfos( light );
		for ( int i=0 ; i<5 ; ++i ) {
			light.switchColor();
			printLightInfos( light );
		}

		light.setSwitchColorStrategy( new SwitchGermany( light.getColor() ) );

		for ( int i=0 ; i<5 ; ++i ) {
			light.switchColor();
			printLightInfos( light );
		}

	}

	public static void printLightInfos( TrafficLight trafficLight ) {
		System.out.println(
				"Is on : " + trafficLight.isOn() + System.lineSeparator() +
				"Color : " + trafficLight.getColor() + System.lineSeparator() );
	}

}
