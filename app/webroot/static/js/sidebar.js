// 侧边栏相关功能
export const initSidebar = () => {
  $('.sidebar-wrapper').each(function () {
    let status = $(this).attr('data-status')
    let position = 'right'
    if(status == '2') {
      position = 'left'
    }
    $(this).children("div").eq(0).css(position, 0).show()
  })
}