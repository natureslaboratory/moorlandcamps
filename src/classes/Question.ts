export default class Question {
    node : HTMLElement;
    answer : HTMLElement;

    get isShowing() : boolean {
        if (this.answer.style.maxHeight) {
            return true;
        }
        return false;
    }

    constructor(node : HTMLElement) {
        this.node = node;
        let answers = this.node.parentElement.getElementsByClassName("c-faq__answer") as HTMLCollectionOf<HTMLElement>;
        if (answers) {
            this.answer = answers[0];
        }
    }

    show() {
        this.answer.style.maxHeight = `${this.answer.scrollHeight}px`;
    }

    hide() {
        this.answer.style.maxHeight = null;
    }
}