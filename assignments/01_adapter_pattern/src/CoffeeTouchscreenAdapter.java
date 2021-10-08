public class CoffeeTouchscreenAdapter  implements CoffeeMachineInterface {
    
    OldCoffeeMachine ocm = new OldCoffeeMachine();

    public void chooseFirstSelection() {
        System.out.println("chooseFirstSelection is called");
        this.ocm.selectA();
    }

    public void chooseSecondSelection() {
        System.out.println("chooseSecondSelection is called");
        this.ocm.selectB();
    }
}