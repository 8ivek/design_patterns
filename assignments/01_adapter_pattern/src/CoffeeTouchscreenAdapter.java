public class CoffeeTouchscreenAdapter  implements CoffeeMachineInterface {
    
    private final OldCoffeeMachine ocm;

    public CoffeeTouchscreenAdapter(OldCoffeeMachine ovm) {
        this.ocm = ovm;
    }

    public void chooseFirstSelection() {
        System.out.println("chooseFirstSelection is called");
        this.ocm.selectA();
    }

    public void chooseSecondSelection() {
        System.out.println("chooseSecondSelection is called");
        this.ocm.selectB();
    }
}