export default function filamentPhpinfoWidget() {
    return {
        time: new Date().toLocaleTimeString(),
        init() {
            setInterval(() => {
                this.time = new Date().toLocaleTimeString()
            }, 1000)
        },
    }
}
