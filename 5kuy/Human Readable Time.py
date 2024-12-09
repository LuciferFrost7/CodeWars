def make_readable(sec: int) -> str:
    return f"{str(sec // 3600).rjust(2, '0')}:{str((sec % 3600) // 60).rjust(2, '0')}:{str(sec % 60).rjust(2, '0')}"