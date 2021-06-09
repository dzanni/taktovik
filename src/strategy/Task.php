<?php

namespace academy\strategy;

class Task
{

    // Статусы

    const STATUS_NEW = 'new';
    const STATUS_CANCEL = 'cancelled';
    const STATUS_WORK = 'work';
    const STATUS_FAILED = 'failed';
    const STATUS_DONE = 'done';

    // Действия заказчика

    const ACTION_START = 'start';
    const ACTION_CANCEL = 'cancel';
    const ACTION_ACCEPT = 'accept';
    const ACTION_APPEAL = 'appeal';
    const ACTION_FINISH = 'finish';

    // Действия исполнителя

    const ACTION_APPLY = 'apply';
    const ACTION_REJECT = 'reject';

    // Свойства

    private $ownerId;
    private $workedId;
    private $status;

    // Конструктор
    // Необязательную переменную на всякий случай убрал направо

    public function __construct($status, $ownerId, $workerId = null)
    {
        $this->status = $status;
        $this->ownerId = $ownerId;
        $this->workerId = $workerId;
    }

    // Функция возврата статуса

    public function getStatus()
    {
        return $this->status;
    }

    //  Возврат карты возможных статусов и действий

    public function getCodesMap()
    {
        $list = [self::STATUS_NEW => 'новое',
        self::STATUS_CANCEL => "отменено",
        self::STATUS_WORK => "в работе",
        self::STATUS_FAILED => "провалено",
        self::STATUS_DONE => "выполнено",
        self::ACTION_START => "создать",
        self::ACTION_CANCEL => "отменить",
        self::ACTION_ACCEPT => "принять отклик",
        self::ACTION_APPEAL => "заявить о проблеме",
        self::ACTION_FINISH => "завершить",
        self::ACTION_APPLY => "откликнуться",
        self::ACTION_REJECT => 'отказаться'];
        return $list;
    }

    // Правила перехода

    public function getNextStatus($action)
    {
        switch ($action)
        {
            case self::ACTION_START:
                $nextStatus = self::STATUS_NEW;
                break;
            case self::ACTION_CANCEL:
                $nextStatus = self::STATUS_CANCEL;
                break;
            case self::ACTION_ACCEPT:
                $nextStatus = self::STATUS_WORK;
                break;
            case self::ACTION_APPEAL:
                $nextStatus = self::STATUS_FAILED;
                break;
            case self::ACTION_FINISH:
                $nextStatus = self::STATUS_DONE;
                break;
            case self::ACTION_APPLY:
                $nextStatus = self::STATUS_NEW;
                break;
            case self::ACTION_REJECT:
                $nextStatus = self::STATUS_FAILED;
                break;
        }
        return $nextStatus;
    }

    // Возможные действия в статусе - реализовано массивом

    public function getActionInStatus()
    {
      switch ($this->status)
      {
          case self::STATUS_NEW:
              $actions = [self::ACTION_CANCEL, self::ACTION_APPLY, self::ACTION_ACCEPT];
              break;
          case self::STATUS_CANCEL:
              $actions = [];
              break;
          case self::STATUS_WORK:
              $actions = [self::ACTION_FINISH, self::ACTION_APPEAL, self::ACTION_REJECT];
              break;
          case self::STATUS_FAILED:
              $actions = [];
              break;
          case self::STATUS_DONE:
              $actions = [];
              break;
      }
      return $actions;
    }
}

?>
