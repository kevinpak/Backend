const body = $('body')
const canv = body.find('#canvas')
const ctx = canv[0].getContext('2d')

canv.css({
    width: '1000px',
    height: '1000px',
    backgroundColor: '#d2d2d2'
})
const canvWidth = canv[0].width
const canvHeight = canv[0].height

const rectX = (canvHeight/2)
const rectY = (canvWidth/2)
const rectXMove = rectX - 100
const rectYMove = rectY - 50

const clearCanvas = () => ctx.clearRect(0,0,canvWidth,canvHeight)

const canvElemWidth = 200
const canvElemHeight = 100
const canvElem = (x=rectX, y=rectY, w=canvElemWidth, h=canvElemHeight) => {
    ctx.beginPath()
    ctx.fillStyle = 'green'
    ctx.fillRect(x, y, w, h)
    ctx.fill()
    ctx.closePath()
}
canvElem(rectXMove, rectYMove)

const rotate_can = () => {
    const newCanvElemWidth = canvElemWidth + 100
    const newCanvElemHeight = canvElemHeight + 100
    const newRectX = rectX - 50
    const newRectY = rectY - 50
    const newRectXMove = rectX - 150
    const newRectYMove = rectY - 100
    clearCanvas()
    ctx.translate(rectX, rectY)
    ctx.rotate((Math.PI / 180) * - 45)
    canvElem(0, 0)
    ctx.translate(-1*rectX, -1*rectY)
    clearCanvas()
    canvElem(newRectXMove, newRectYMove, newCanvElemWidth, newCanvElemHeight)
}